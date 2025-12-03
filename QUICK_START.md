# Quick Start Guide - Projects & Settings

## ✅ Completed Implementation

### 1. Settings Page Configuration

**Location:** `/admin/settings` (Systems → Settings)

**All fields are ready to configure:**

#### Social Media Section
- Facebook URL
- YouTube URL
- LinkedIn URL
- Viber URL
- Instagram URL

#### Site Information
- Email
- Address
- Main Phone Number
- Secondary Phone Number

#### Branding
- Favicon (upload .ico or .png file)
- Logo (upload image)
- Logo Alt Text (for SEO)

#### Homepage Settings
- YouTube Slider Link (for homepage video slider)

#### Footer
- Footer Description (text for footer section)

---

### 2. Projects Feature (NEW)

**Replace Agency with Projects - fully functional**

#### Admin Panel Access
- URL: `/admin/projects`
- Menu: Content → Projects

#### Creating a Project
1. Click "New Project" button
2. Fill in:
   - **Title** (required) - e.g., "Modern Villa Construction"
   - **Slug** (required) - e.g., "modern-villa-construction"
   - **Content** (required) - Full project description with rich text editor
   - **Excerpt** (optional) - Short summary
3. Upload Images:
   - **Featured Image** - Main project image (shown in listing)
   - **Gallery** - Multiple images (shown in detail page)
4. Set Publishing:
   - Toggle "Is Published"
   - Set "Published At" date
5. Assign to User (optional)
6. Click "Create"

#### Frontend URLs
- **All Projects:** `https://yoursite.com/projects-gallery`
- **Single Project:** `https://yoursite.com/projects-gallery/project-slug`

---

## Navigation Updates

All menus now show:
- Home
- About Us
- Property
- **Project** ← NEW (was "Agency")
- Blog
- Contact Us

---

## File Locations

### Views
- Project List: `resources/views/pages/projects.blade.php`
- Project Detail: `resources/views/pages/project-detail.blade.php`

### Controller
- `app/Http/Controllers/ProjectController.php`

### Model
- `app/Models/Project.php`

### Admin Resource
- `app/Filament/Resources/Projects/ProjectResource.php`

---

## Features

### Projects Support:
✅ Rich text editor for content  
✅ Featured image for listings  
✅ Multiple gallery images  
✅ SEO-friendly slugs  
✅ Published/Draft status  
✅ Scheduled publishing  
✅ View tracking  
✅ Soft deletes (recoverable)  
✅ Responsive design  
✅ Social sharing  

### Settings Support:
✅ All social media platforms  
✅ Multiple phone numbers  
✅ Email configuration  
✅ Logo & Favicon uploads  
✅ YouTube integration  
✅ Custom footer text  

---

## Next Steps

1. **Configure Settings:**
   - Go to `/admin/settings`
   - Add all your social media links
   - Upload logo and favicon
   - Set contact information

2. **Create First Project:**
   - Go to `/admin/projects`
   - Click "New Project"
   - Add project details and images
   - Publish

3. **Test Frontend:**
   - Visit `/projects-gallery`
   - Check project appears
   - Click to view detail page
   - Verify gallery works

---

## Tips

- **Image Sizes:**
  - Featured Image: Recommend 800x600px or larger
  - Gallery Images: Recommend 1200x900px for best quality
  - Favicon: 32x32px or 64x64px
  - Logo: Variable, depends on your design

- **SEO:**
  - Use descriptive titles
  - Fill in excerpts for better previews
  - Use meaningful slugs (auto-generated from title)
  - Add alt text to logo

- **Publishing:**
  - Draft projects won't show on frontend
  - Use "Published At" for scheduled releases
  - Future dates will hide project until that date

---

## Removed Features

❌ **Agency Page** - Completely removed and replaced with Projects
- Deleted: `resources/views/pages/agencies.blade.php`
- Removed: All agency routes
- Updated: All navigation links

---

## Support Files

- Full implementation details: `IMPLEMENTATION_SUMMARY.md`
- This guide: `QUICK_START.md`

---

## Troubleshooting

**Can't see Settings page?**
- Make sure you're logged in to `/admin`
- Check under "Systems" menu group

**Projects not showing?**
- Ensure "Is Published" is toggled ON
- Check "Published At" date is not in future
- Verify migration was run: `php artisan migrate`

**Images not uploading?**
- Check `storage` folder permissions
- Run: `php artisan storage:link`
- Verify `public/storage` symlink exists

**Routes not working?**
- Clear caches: `php artisan route:clear && php artisan config:clear`
- Check `.env` file configuration

---

Done! 🎉

---

## Database Seeding

### Run All Seeders
```bash
php artisan migrate:fresh --seed
```

This will create:
- Admin user (test@example.com / password)
- Amenities
- Properties  
- Posts
- **8 Sample Projects** (NEW)
- Contact form submissions

### Run Only Project Seeder
```bash
php artisan db:seed --class=ProjectSeeder
```

### Sample Projects Created

The seeder creates 8 diverse projects:

1. **Modern Villa Construction in District 2** - Published
   - Luxury villa with smart home integration
   - 4 bedrooms, infinity pool, solar panels

2. **Luxury Apartment Complex - Thao Dien** - Published
   - 120 units, rooftop pool, resort amenities
   - 15-story development

3. **Eco-Friendly Townhouse Development** - Published
   - LEED Gold certified sustainable homes
   - Solar energy, green roofs, 45 units

4. **Heritage Building Restoration - Dong Khoi Street** - Published
   - 1920s colonial building restoration
   - Preserved historical architecture

5. **Contemporary Office Tower - CBD Area** - Published
   - 25-story Grade-A office building
   - LEED Platinum, smart building tech

6. **Beach Resort Villas - Vung Tau** - Published
   - 12 beachfront villas with private pools
   - Direct beach access

7. **Mixed-Use Development - Binh Thanh District** - Published
   - Integrated residential, retail, office
   - 2 towers, shopping mall, hotel

8. **Smart Home Renovation - Traditional House** - Draft
   - Modern tech in traditional Vietnamese house
   - Scheduled for future publishing

All projects include:
- ✅ Detailed descriptions with HTML formatting
- ✅ Feature lists and specifications
- ✅ Construction highlights
- ✅ SEO-friendly slugs
- ✅ Publication dates

