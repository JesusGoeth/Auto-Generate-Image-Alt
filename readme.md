# 🖼️ Auto Image Alt from Page Title (Theme Add-On)

This is a simple WordPress **theme add-on** that auto-generates `alt` attributes for images. If no `alt` is provided, it will use the current post or page title followed by the word “image”.

## 💡 Use Case

Improves **accessibility** and **SEO** without requiring editors to manually enter alt text on every image.

## 📂 How to Use

1. Drop `image_alt_from_page_title.php` into your theme’s `/functions/` folder (or wherever you organize custom logic).
2. Add this line to your `functions.php`:

```php
require_once get_template_directory() . '/functions/image_alt_from_page_title.php';
