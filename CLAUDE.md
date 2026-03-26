Faith Formers — Brand Context for Claude Code
What This Site Is
Faith Formers is a Catholic content and community platform that equips people to live and pass on their faith — in the parish, in the home, and in the heart. It is bigger than any one person, rooted in authentic Catholic tradition, built to serve three distinct audiences simultaneously.

Anna Forsberg is the voice and pastoral heart. Jeremy Forsberg builds and operates the systems.

---

The Three Pillars
For the Parish — Faith formation professionals: DREs, catechists, youth ministers, parish directors. Practical tools, liturgical calendar resources, professional encouragement.
For the Home — Parents and families. Dinner table questions, seasonal faith practices, making Sunday Mass mean something Monday through Saturday. Primary list-building engine.
For the Heart — Personal formation. Reflection prompts, prayer practices, faith in ordinary moments. Anna at her most personal. Draws on Ignatian spirituality and lived Catholic tradition.

---

Anna's Voice — Non-Negotiables
Pastoral Presence — Real parish moments, behind-the-scenes. "Last night a parent said something that stopped me cold."
Quiet Confidence — Expertise through specificity. "I've done this exact retreat 14 times. Here's what the women always cry about."
Warm Invitation — Opens a door, never tells. "What would it look like in your house if Sunday was actually different?"
Liturgical Fluency — Lives the Church calendar naturally. Feast days, seasons, sacraments appear organically.
Human Realness — "Isla rolled her eyes at grace before dinner tonight. I laughed. Then I cried. Then laughed again."

She points toward encounter, not herself. She shows her work, not her wins.

---

Brand Colors
Signature gradient: #4FC3F7 → #8B5CF6 → #C850C0 (cyan → purple → magenta)
#7DD3C0 — Brand Teal (primary accent)
#00BFFF — Brand Blue (secondary accent)
#E91E8C — Brand Magenta (CTA, highlight)
#2D1B69 — Deep Purple (not primary — older palette)
#18160F — Ink (primary text, dark backgrounds)
#F5EDE0 — Cream (primary background)
#4A4740 — Mid Gray (body text)
#FFFFFF — White

---

Typography
Headings: Instrument Sans 700–800, tight letter-spacing
Body / UI: Instrument Sans 400–500
Pull quotes / scripture: Instrument Sans italic

---

Site Structure (Phase 1)
Home — Hero, three pillar rows, Anna intro block, newsletter signup
About Anna — Story, pastoral background, mission tie-in
Resources — Filterable by Parish / Home / Heart (category archive)
Single Post — Content, author bio, related posts, newsletter CTA
Contact — Retreat inquiries, WPForms

Primary CTA on every page: Join the newsletter (Kit/ConvertKit)

---

Tone & Aesthetic
Warm, pastoral, modern — NOT traditional church aesthetic
Editorial and content-forward, not product-forward
Human and real — not a polished Catholic lifestyle brand
Every page invites the reader deeper and captures their email

---

Technical Notes
WordPress on Hostinger staging: staging.faithformers.com
Git repo: ~/Sites/faith-formers/ → github.com/mojavefoz/faith-formers-theme
Active theme: Faith Formers Child (Kadence parent) — ~/Sites/faith-formers/
All custom code in child theme only — never touch the parent
Email: Kit (ConvertKit) — uid 6eb3da3edd
Digital products Phase 2: LemonSqueezy
No WooCommerce, Events Calendar, or GiveWP in Phase 1

---

Key Files
functions.php — enqueue styles/scripts, schema hooks, OG tags
header.php — universal header (replaces Kadence default)
footer.php — universal footer
global.css — design system: variables, typography, buttons, layout
front-page.php, about.php, single.php, category.php, contact.php, archive.php, home.php
js/theme.js — sticky header scroll behavior, mobile nav toggle

---

Pending Task Queue

BATCH 1 — Schema + Open Graph ✅ COMPLETE
- Schema.org JSON-LD: Organization, WebSite, Article, Person, CollectionPage, FAQPage
- Open Graph + Twitter Card meta tags (defers to Rank Math/Yoast if active)
- Commit: "SEO: Schema.org structured data + Open Graph sitewide"

BATCH 2 — Universal header + sitewide fixes ⏳ IN PROGRESS
- Remove Kadence default header, force header.php on every page via functions.php hook
- Confirm get_header() in all template files
- Logo: color version before scroll, larger size
- Nav font: bigger, font-weight 600 minimum
- CTA button: border-radius 100px, padding 12px 28px, #E91E8C magenta, white text
- Header height: 72px minimum
- Scroll transition: transparent to cream #F5EDE0, transition all 0.3s ease, subtle box-shadow
- Commit: "Design: Universal header — logo, nav, CTA, scroll transition"

BATCH 3 — Homepage Anna section
- Two-column layout: text left, image right, vertically centered
- Keep image placeholder for now
- Tighten bottom padding on cream section below
- Commit: "Design: Fix Anna intro section layout — two-column, image inline"

BATCH 4 — Resources + category pages
- category.php must look identical to resources page
- Filter pills: All = main archive, Parish/Home/Heart = category URLs, active state highlighted
- Confirm universal header loads on resources page
- Card grid identical across all pages
- Commit: "Design: Resources + category pages — seamless filter experience"

BATCH 5 — About page dark section
- Replace #1a1a1a background in Bigger Than One Voice section with cream #F5EDE0
- Cards: white background, ink text #18160F, teal/blue/magenta accents per brand
- Commit: "Design: About page — light treatment for Bigger Than One Voice section"
