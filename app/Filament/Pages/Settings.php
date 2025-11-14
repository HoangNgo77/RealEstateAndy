<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSetting;
use Filament\Actions\Action;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
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
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Enter site name'),
                        TextInput::make('site_description')
                            ->maxLength(255)
                            ->placeholder('Enter site description'),
                        TextInput::make('site_email')
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->placeholder('admin@example.com'),
                        TextInput::make('site_phone')
                            ->tel()
                            ->maxLength(20)
                            ->placeholder('+1 (555) 123-4567'),
                        TextInput::make('site_address')
                            ->maxLength(500)
                            ->placeholder('Street address'),
                    ])
                    ->columns(2),

                Section::make('Social Media')
                    ->description('Links to your social media profiles')
                    ->schema([
                        TextInput::make('facebook_url')
                            ->url()
                            ->placeholder('https://facebook.com/yourpage'),
                        TextInput::make('twitter_url')
                            ->url()
                            ->placeholder('https://twitter.com/yourhandle'),
                        TextInput::make('instagram_url')
                            ->url()
                            ->placeholder('https://instagram.com/yourhandle'),
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
