# Faith Formers Homepage — Kadence JSON Import

## File to use

**`FAITHFORMERS-HOMEPAGE-KADENCE-JSON-IMPORT.json`**

## How to import

1. Open your **Home** page in the WordPress block editor (Kadence).
2. Remove any existing blocks on the page.
3. Use Kadence’s **JSON import**:
   - **Option A:** Editor menu (⋮) → **Import** / **Import from JSON** (or similar). Paste the **entire contents** of `FAITHFORMERS-HOMEPAGE-KADENCE-JSON-IMPORT.json`.
   - **Option B:** If your site has **Appearance → Design → Patterns**, go there, choose **Import from JSON**, and upload or paste the same file. Save as a pattern, then insert that pattern into the Home page.
4. If the import tool asks only for **block content** (not a full JSON object), use the **Code editor** instead: switch the page to Code editor, delete existing content, and paste the block markup from **`faithformers-homepage-blocks.txt`** (the part starting with `<!-- wp:group -->` and ending with `<!-- /wp:group -->`).

## After import

- **Newsletter:** Replace the placeholder in the last section with your Kit (ConvertKit) form: add a **Custom HTML** block and paste your Kit embed script, or use a shortcode block with your form shortcode.
- **Links:** “Read More” goes to `/category/parish/`, `/category/home/`, `/category/heart/`. Create those categories or change the links. “More about Anna” goes to `/about-anna/` — create that page or edit the link.

## What’s included

- **Hero:** Dark background (#1A1A2E), mission line, “Join the Newsletter” CTA (#newsletter), pillar line.
- **Three pillar cards:** Parish (cyan accent), Home (purple), Heart (magenta); each with title, description, Read More.
- **Anna intro:** “Meet Anna” block with two paragraphs and link to About Anna.
- **Newsletter section:** Heading (id=`newsletter`), supporting text, placeholder for Kit form.

Brand colors from CLAUDE.md: #4FC3F7, #8B5CF6, #C850C0, #2D1B69, #1A1A2E, #555555, #F5F5F7. Georgia for headings, Arial for body.
