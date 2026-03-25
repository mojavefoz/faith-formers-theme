# Faith Formers hero section (Influencer theme)

The home page hero is built for the **Influencer** child theme. It uses Anna’s voice, the three pillars (Parish, Home, Heart), and the primary CTA: **Join the Newsletter**.

## How it appears

- **Automatic:** If Influencer uses the `influencer_after_header` hook, the hero is output automatically on the **front page** only.
- **Shortcode:** If it doesn’t show, add the shortcode at the top of your Home page or in a Custom HTML block:
  ```
  [faithformers_hero]
  ```

## WordPress setup

1. **Static front page**  
   Settings → Reading → “A static page” → Homepage: choose your **Home** page.

2. **Logo**  
   Appearance → Customize → Site Identity → upload the logo you want site-wide.  
   For the **hero** (front page), the theme uses the Customizer logo, or this fallback if set in the theme folder:
   - **Faith_Formers_Logo_2.png** — multicolor stacked (hero)
   Place it at `assets/images/Faith_Formers_Logo_2.png`.  
   Other assets (use in Customizer or elsewhere as needed):
   - **Faith_Formers_Logo_2_White.png** — white stacked (e.g. header on dark)
   - **Faith_Formers_Wordmark.png** — wordmark only

3. **Hero image (Anna)**  
   A placeholder is shown until you add a photo. To replace it:
   - **Option A:** Appearance → Customize → **Faith Formers Hero** → upload “Hero image (Anna)”. Horizontal recommended (e.g. 1200×800px).
   - **Option B:** Add `anna-hero.png` to the theme at `assets/images/anna-hero.png`.

4. **Newsletter**  
   The Kit embed is already integrated. A newsletter section with `id="newsletter"` is output right after the hero; the “Join the Newsletter” button scrolls to it. The form uses your Kit UID `6eb3da3edd`. To change it, edit `template-parts/newsletter.php`.

## Brand

- Colors: cyan → purple → magenta gradient on dark (#1A1A2E).
- Typography: Georgia (headings), Arial (body).
- Copy is warm, pastoral, and inclusive of all three pillars.
