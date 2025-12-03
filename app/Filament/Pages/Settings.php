<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSetting;
use Filament\Actions\Action;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use UnitEnum;
use BackedEnum;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Schema;

class Settings extends Page
{
    use InteractsWithSchemas;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string | UnitEnum | null $navigationGroup = 'Systems';

    protected static ?string $title = 'General Settings';

    protected static ?string $navigationLabel = 'Settings';

    protected string $view = 'filament.pages.settings';

    public ?array $data = [];

    public function mount(): void
    {
        $settings = app(GeneralSetting::class);
        $this->data = $settings->toArray();
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Site Information')
                    ->description('General information about your site')
                    ->schema([
                        TextInput::make('site_name')
                            ->label('Site Name')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Enter site name'),
                        Textarea::make('site_description')
                            ->label('Site Description')
                            ->maxLength(500)
                            ->rows(3)
                            ->placeholder('Enter site description'),
                        TextInput::make('site_email')
                            ->label('Site Email')
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->placeholder('admin@example.com'),
                        TextInput::make('site_phone')
                            ->label('Main Phone Number')
                            ->tel()
                            ->required()
                            ->maxLength(20)
                            ->placeholder('+1 (555) 123-4567'),
                        TextInput::make('site_phone_sub')
                            ->label('Secondary Phone Number')
                            ->tel()
                            ->maxLength(20)
                            ->placeholder('+1 (555) 123-4568'),
                        Textarea::make('site_address')
                            ->label('Address')
                            ->maxLength(500)
                            ->rows(2)
                            ->placeholder('Street address'),
                    ])
                    ->columns(2),

                Section::make('Branding')
                    ->description('Upload your logo and favicon')
                    ->schema([
                        FileUpload::make('logo')
                            ->label('Logo')
                            ->image()
                            ->directory('settings')
                            ->maxSize(2048)
                            ->helperText('Upload your site logo (max 2MB)'),
                        TextInput::make('logo_alt')
                            ->label('Logo Alt Text')
                            ->maxLength(255)
                            ->placeholder('Logo description for accessibility'),
                        FileUpload::make('favicon')
                            ->label('Favicon')
                            ->image()
                            ->directory('settings')
                            ->maxSize(512)
                            ->helperText('Upload your favicon (max 512KB, recommended 32x32 or 64x64 px)'),
                    ])
                    ->columns(2),

                Section::make('Social Media')
                    ->description('Links to your social media profiles')
                    ->schema([
                        TextInput::make('facebook_url')
                            ->label('Facebook URL')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://facebook.com/yourpage'),
                        TextInput::make('youtube_url')
                            ->label('YouTube URL')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://youtube.com/yourchannel'),
                        TextInput::make('linkedin_url')
                            ->label('LinkedIn URL')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://linkedin.com/in/yourprofile'),
                        TextInput::make('viber_url')
                            ->label('Viber URL')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('viber://chat?number=1234567890'),
                        TextInput::make('instagram_url')
                            ->label('Instagram URL')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://instagram.com/yourhandle'),
                    ])
                    ->columns(2),

                Section::make('Homepage Settings')
                    ->description('Configure homepage elements')
                    ->schema([
                        TextInput::make('homepage_youtube_slider')
                            ->label('YouTube Slider Link')
                            ->url()
                            ->maxLength(255)
                            ->placeholder('https://youtube.com/watch?v=...')
                            ->helperText('YouTube video link for homepage slider'),
                    ])
                    ->columns(1),

                Section::make('Footer')
                    ->description('Footer content')
                    ->schema([
                        Textarea::make('footer_description')
                            ->label('Footer Description')
                            ->maxLength(1000)
                            ->rows(4)
                            ->placeholder('Enter footer description text'),
                    ])
                    ->columns(1),

                Section::make('System Settings')
                    ->description('Configure system behavior')
                    ->schema([
                        Toggle::make('enable_contact_form')
                            ->label('Enable Contact Form')
                            ->helperText('Allow visitors to contact you through the website'),
                        Toggle::make('enable_maintenance_mode')
                            ->label('Enable Maintenance Mode')
                            ->helperText('Hide the website from visitors while performing maintenance'),
                    ])
                    ->columns(1),
            ])
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Settings')
                ->submit('save')
                ->color('primary'),
        ];
    }

    public function save(): void
    {
        $settings = app(GeneralSetting::class);
        $settings->fill($this->data);
        $settings->save();

        Notification::make()
            ->title('Settings saved successfully')
            ->success()
            ->send();
    }
}
