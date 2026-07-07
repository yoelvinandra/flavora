# Miriva Website — Full Wireframe & Design Brief

> Editable reference for both Stitch (visual design) and Claude Code (implementation).
> Layout & animation patterns borrowed from the Estrela Studio reference (index3 - Copy.html).
> Aesthetic entirely from Miriva Brand DNA. Hero video: `assets/video/Hero.mp4`

---

## Color Palette

| Token          | Hex       | Usage                                             |
| -------------- | --------- | ------------------------------------------------- |
| Harvest Gold   | `#fdc903` | CTAs, badges, accent lines, active states         |
| Deep Mahogany  | `#3f2b2e` | Primary text, dark section backgrounds            |
| Warm Linen     | `#f7f2ea` | Light section backgrounds, secondary text on dark |
| White          | `#ffffff` | Clean space, card backgrounds                     |
| Midnight Ink   | `#001022` | Hero overlay, footer, darkest moments             |
| Provencal Blue | `#223265` | Trust signals, secondary accent                   |

## Typography

| Role | Font | Weight |
|------|------|--------|
| Brand / Display | Noto Serif Condensed | 400, 700 |
| Body / UI | Montserrat | 300, 400, 500, 600 |

---

## Page Sections (Top to Bottom)

---

### 1. LOADER
**Pattern:** Estrela number counter loader [AI: i don't want any loader]

**Layout:**
- Full-screen black overlay (`#001022`)
- Miriva logo centered (white, fades in)
- Font: Noto Serif Condensed, large, Warm Linen color
- Fades out once assets loaded, revealing hero beneath

**Animation:**
- Counter increments with staggered easing (not linear)
- Logo fades in at ~50%, fades out with the loader
- Loader slides up off-screen to reveal hero (not a fade — a clip reveal)

**Colors:** Background `#001022`, text `#f7f2ea`

---

### 2. FIXED NAV
**Pattern:** Estrela minimal fixed nav — hides on scroll down, reappears on scroll up

**Layout (desktop):**
```
[ MIRIVA — left ]     [ scroll indicator text — center ]     [ ≡ dot grid — right ]
```

**Layout (mobile):**
```
[ MIRIVA logo — left ]     [ dot grid — right ]
```

**Logo:** White Miriva wordmark, Noto Serif Condensed, ~13px height
**Dot grid:** 3×3 grid of dots (same as Estrela). Animates to X on open. 
**Theme:** Dark (white text) over hero, switches to dark on dark / light on light as user scrolls through sections — driven by `data-theme` on each section

**Nav is single-page, no links.** Clicking the dot grid opens the full-screen menu (Section 3).

---

### 3. FULL-SCREEN MENU (Overlay)
**Pattern:** Estrela slide-in full-screen menu

**Triggered by:** dot grid button

**Layout:**
```
┌──────────────────────────────────────────┐
│  [ X close — top right ]                 │
│                                          │
│  Mulai Konsultasi          [Chat CTA btn]│ ← top row
│                                          │
│  — Tentang Miriva                        │ ← big nav links
│  — Kandungan                             │   staggered fade-in
│  — Cara Pakai                            │   on open
│  — FAQ                                  │
│                                          │
│  Instagram  ·  TikTok  ·  Shopee        │ ← social/links row
│                                          │
│  📍 Single-origin Flores, NTT           │ ← footer of menu
└──────────────────────────────────────────┘
```

**Background:** `#3f2b2e` (Deep Mahogany) slides in from right or scales up from center
**Text:** Warm Linen `#f7f2ea` for nav links, Noto Serif Condensed, very large
**CTA button:** Harvest Gold `#fdc903`, pill shape, "Mulai Konsultasi Gratis"

**Animation:**
- Background scales/slides in (0.4s ease)
- Nav links stagger in from left (each 50ms apart)
- Close dot grid morphs back from X

---

### 4. HERO SECTION
**Pattern:** Estrela full-screen video hero with split headline

**Background:** Looping video (`assets/video/Hero.mp4`)
- Overlay: `#001022` at 45% opacity — warm, not too dark, let the video breathe

**Layout (desktop):**
```
┌─────────────────────────────────────────────────────┐
│                   [VIDEO BG]                        │
│                                                     │
│  Rambut sehat          [ MIRIVA logo — center ]     │
│                    dari akarnya                     │
│                                                     │
│  ┌────────────┐ ┌──────────────┐ ┌───────────────┐  │
│  │🧪 Aflatoksin│ │🌿 Cold-pressed│ │📍 Flores, NTT │  │
│  │250× aman   │ │di bawah 50°C │ │Single-origin  │  │
│  └────────────┘ └──────────────┘ └───────────────┘  │
│                                                     │
│            [ Mulai Konsultasi Gratis ↓ ]            │
│                                                     │
│  Scroll untuk pelajari lebih lanjut ——————         │ ← desktop only
└─────────────────────────────────────────────────────┘
```

**Layout (mobile):**
- Video full screen
- Logo top center
- Headline stacked, large
- Credibility pills stacked vertically (or 1-col)
- CTA button full-width at bottom

**Content:**
- Headline left: "Rambut sehat"
- Headline right: "dari akarnya"
- Font: Noto Serif Condensed, ~12rem desktop / ~6rem mobile
- Color: White

- Center logo: Miriva wordmark, white, ~60px

- 3 credibility pills:
  - "🧪 Aflatoksin 250× di bawah batas BPOM"
  - "🌿 Cold-pressed di bawah 50°C"
  - "📍 Single-origin Flores, NTT"
  - Style: semi-transparent dark bg, 1px gold border, Montserrat 11px, white text

- Trust line below pills: `✅ Halal  ·  🧪 Diuji Lab Sucofindo`
  - Color: `#fdc903` Harvest Gold, Montserrat 12px

- CTA button: "Mulai Konsultasi Gratis ↓"
  - Background: `#fdc903`, text: `#3f2b2e`, pill shape, Montserrat semibold
  - Scrolls to Section 8 (Chat) on click
  - Auto-scrolls after 4 seconds on mobile

**Animation:**
- Headline left slides in from left on load (after loader exits)
- Headline right slides in from right on load
- Pills and CTA fade up with slight delay (0.6s stagger)
- Scroll text fades in last
- Video starts muted autoplay loop

**Colors:** Dark theme. `#001022` overlay, white text, `#fdc903` accents

---

### 5. EMPATHY SECTION — "Apakah ini kamu?"
**Pattern:** Estrela "exp" section — image block + content side by side

**data-theme:** light

**Layout (desktop):**
```
┌────────────────────┬──────────────────────────────────┐
│                    │                                  │
│  [product image    │  Kami memahami                   │
│   — bottle,        │  perjuanganmu                    │ ← Noto Serif Condensed, large
│   warm lighting]   │                                  │
│                    │  Apakah ini kamu?                │ ← subtitle, Montserrat, gold
│                    │                                  │
│                    │  Rontok tiap hari sampai takut   │
│                    │  nyisir. Rambut tipis yang tidak │
│                    │  kunjung tebal meski sudah coba  │
│                    │  banyak produk. Atau rontok       │
│                    │  hebat pasca melahirkan, dan kamu│
│                    │  butuh yang benar-benar aman.    │
│                    │  Kamu tidak sendirian.            │
└────────────────────┴──────────────────────────────────┘
```

**Layout (mobile):** Content stacks above image

**Content:**
- Title: "Kami memahami perjuanganmu"
- Subtitle: "Apakah ini kamu?" — `#fdc903`, Montserrat, small caps
- Body: Full empathy paragraph (Indonesian), Montserrat 400, `#3f2b2e`
- Image: product bottle, warm natural lighting, portrait crop

**Animation:**
- Image scales up slightly on scroll-enter (subtle parallax)
- Text lines reveal from bottom (clip-path or translateY)

**Colors:** Background `#f7f2ea` Warm Linen, text `#3f2b2e`

---

### 6. SCIENCE SECTION — "Kandungan Aktif"
**Pattern:** Estrela "work" grid — numbered items, one featured column + scrollable cards

**data-theme:** light 

**Layout (desktop):**
```
┌─────────────────┬─────────┬─────────┬─────────┬─────────┐
│                 │   01    │   02    │   03    │   04    │
│  Cold-Pressed:  │[img]    │[img]    │[img]    │[img]    │
│  Nutrisi Utuh   │         │         │         │         │
│                 │ Asam    │Quercetin│ Enzim   │  Asam   │
│  Berbeda dari   │Linoleat │(Flavon.)│ AKR1C   │Alfa-Lin.│
│  minyak kemiri  │         │         │         │         │
│  bakar, Miriva  │Picu     │Hambat   │Tambah   │Lancar   │
│  cold-pressed   │rambut   │hormon   │volume   │nutrisi  │
│  menjaga semua  │baru     │DHT      │rambut   │akar     │
│  senyawa aktif. │Aktifkan │Cegah    │Rambut   │Redakan  │
│                 │anagen   │botak    │lebih    │rontok   │
│                 │         │dini     │tebal    │         │
└─────────────────┴─────────┴─────────┴─────────┴─────────┘
```

**Layout (mobile):** Horizontal scroll carousel of numbered cards

**Content:**
- Featured text: "Cold-Pressed: Nutrisi Utuh" + explanation paragraph
- Cards 01–04: ingredient name, image, 2 benefit lines each
- Ingredient images: Linoleat.jpeg, Quercetin.jpeg, Enzim.png, Alfa-Linolenat.png (from assets)

**Animation:**
- Featured text stays sticky on desktop while cards scroll past
- Card numbers count up as they enter viewport
- Card images reveal with clip-path from bottom
- Hover: slight scale + gold underline on ingredient name

**Colors:** Background `#ffffff`, text `#3f2b2e`, numbers `#fdc903`

---

### 7. ABOUT SECTION — "Tentang Miriva"
**Pattern:** Estrela "about" — editorial oversized title left, content + images right

**data-theme:** light

**Layout (desktop):**
```
┌──────────────┬───────────────────────────────────────┐
│              │  [img 1]  [img 2]  [img 3]            │ ← 3 images, fade carousel
│  Tentang     │                                       │
│              │  Kami adalah tim kecil yang bekerja   │
│  Miriva      │  langsung dengan petani kemiri di     │ ← body text
│              │  Flores, Nusa Tenggara Timur...       │
│              │                                       │
│  (very large │  Setiap botol Miriva melewati proses  │
│   Noto Serif │  yang sama: cold-pressed, 1-mikron    │
│   Condensed) │  filtrasi, diuji Sucofindo.           │
│              │                                       │
│              │  Tidak ada laboratorium kimia.        │
│              │  Tidak ada campuran sintetis.         │
└──────────────┴───────────────────────────────────────┘
```

**Image carousel:** landscape bottle, pipet, mixing bowl (auto-rotates every 4s, no dots/arrows)

**Animation:**
- Title clips in from bottom on scroll enter
- Images crossfade
- Body text reveals line by line

**Colors:** Background `#f7f2ea`, title `#3f2b2e`, body `#3f2b2e`

---

### 8. RITUAL SECTION — "Cara Pakainya"
**Pattern:** Full-width three-step journey — image above, label + description below, centered layout

**data-theme:** light

**Layout (desktop):**
```
┌──────────────────────────────────────────────────────┐
│                                                      │
│              Ritualmu malam ini.                     │ ← section title, Noto Serif Condensed
│       Tiga langkah. Satu kebiasaan yang berhasil.    │ ← subtitle, Montserrat, gold
│                                                      │
│  ┌──────────────┐  ┌──────────────┐  ┌────────────┐ │
│  │   [IMAGE 1]  │  │   [IMAGE 2]  │  │  [IMAGE 3] │ │
│  │              │  │              │  │            │ │
│  │  — 01 —      │  │  — 02 —      │  │  — 03 —    │ │
│  │  Teteskan    │  │  Pijat Lembut│  │  Bilas Pagi│ │
│  │              │  │              │  │            │ │
│  │  Teteskan    │  │  Pijat kulit │  │  Tinggalkan│ │
│  │  5–8 tetes,  │  │  kepala      │  │  semalam,  │ │
│  │  ratakan     │  │  dengan ujung│  │  bilas pagi│ │
│  │  dengan      │  │  jari 5      │  │  hari.     │ │
│  │  ujung jari. │  │  menit.      │  │            │ │
│  └──────────────┘  └──────────────┘  └────────────┘ │
│                                                      │
│  ─────────────────────────────────────────────────  │
│                                                      │
│       Tidak yakin cocok buat kondisi rambutmu?       │ ← invitation line, Montserrat
│         [ Tanya Ara — konsultan rambutmu ↓ ]         │ ← CTA, gold pill button
│                                                      │
└──────────────────────────────────────────────────────┘
```

**Layout (mobile):** Steps stack vertically, image above label + text, full width

**Images:**

- **Step 1 — "Teteskan":** Close-up of a hand holding the Miriva dropper bottle, a few drops of golden oil falling onto a woman's parted hairline. Warm, intimate lighting — feels like a quiet evening ritual. No clutter in frame.

- **Step 2 — "Pijat Lembut":** Overhead or side shot of two hands gently massaging a scalp, fingers spread through dark hair. Soft bokeh background. Conveys care, intentionality, and calm — not clinical.

- **Step 3 — "Bilas Pagi":** A woman running her fingers through clean, shiny hair in morning light — near a window or in a bathroom with warm sunlight. Hair looks visibly healthy, full, and light. Feels like a reward.

**Step copy (final, copy-paste ready):**

- **Step 1 — Teteskan:** Teteskan 5–8 tetes Miriva langsung ke kulit kepala yang sudah bersih. Gunakan ujung jari untuk meratakan minyak sebelum meresap — sedikit kehangatan dari tanganmu membantu penyebarannya lebih merata.

- **Step 2 — Pijat Lembut:** Pijat kulit kepala dengan ujung jari selama 5 menit, mulai dari mahkota ke arah pelipis. Jangan terburu-buru — ini bukan sekadar pijatan, ini saat akar rambutmu menyerap semua yang mereka butuhkan.

- **Step 3 — Bilas Pagi:** Tinggalkan semalam, bilas di pagi hari. Rambut terasa bersih, ringan, dan tidak berminyak — karena Miriva menyerap, bukan menempel. Lakukan rutin, dan biarkan waktunya yang bicara.

**Step numbers:** `— 01 —` style, Montserrat small caps, `#fdc903` gold
**Step titles:** Noto Serif Condensed, `#3f2b2e`, medium-large
**Step descriptions:** Montserrat 400, `#3f2b2e`, 14px, max 3 lines
**Images:** Square or 4:5 crop, rounded corners (8px), warm natural color grading to match brand

**Invitation block (below steps):**
- Thin horizontal rule separator
- Soft line: "Tidak yakin cocok buat kondisi rambutmu?" — Montserrat 400, `#3f2b2e`
- CTA button: "Tanya Ara — konsultan rambutmu ↓" — gold pill, scrolls to Chat section
- Spacing: generous top padding so this reads as a distinct moment, not an afterthought

**Animation:**
- Section title clips in from bottom on scroll-enter
- Each step card staggers in left-to-right (100ms apart) with translateY + fade
- Step images reveal with clip-path from bottom
- Invitation line fades in after all three steps are visible
- CTA button pulses once on appear (scale 1.0 → 1.04 → 1.0)

**Colors:** Background `#f7f2ea` Warm Linen, text `#3f2b2e`, accents `#fdc903`

---

### 9. CHAT SECTION — "Konsultasi dengan Ara" [AI: instead of entire section, i want a new page that brings the user to a specific chatbot page]
**Pattern:** Custom — no Estrela equivalent. This is the centerpiece of the page.

**data-theme:** dark

**Layout:**
```
┌──────────────────────────────────────────────────────┐
│                                                      │
│         Konsultasi dengan Ara                        │ ← section title, Noto Serif
│    Spesialis rambut Miriva, siap membantumu          │ ← subtitle, Montserrat
│                                                      │
│  ┌────────────────────────────────────────────────┐  │
│  │                                                │  │
│  │  [Ara avatar — circle, warm illustration]      │  │
│  │  ┌─────────────────────────────────────────┐  │  │
│  │  │ Hai! Aku Ara, spesialis rambut Miriva.  │  │  │ ← AI bubble, left-aligned
│  │  │ Apa yang bisa aku bantu soal rambutmu?  │  │  │
│  │  └─────────────────────────────────────────┘  │  │
│  │                                                │  │
│  │  Quick-start:                                  │  │
│  │  [Rambut rontok] [Rambut tipis]               │  │
│  │  [Aman untuk ibu menyusui?]                   │  │
│  │  [Bedanya sama yang biasa?]                   │  │
│  │  [Cara pakai]                                 │  │
│  │                                                │  │
│  │  (chat messages render here)                  │  │
│  │                                                │  │
│  │  ┌─────────────────────────────────── [kirim]┐│  │
│  │  │ Ketik pertanyaanmu...                     ││  │
│  │  └──────────────────────────────────────────┘│  │
│  └────────────────────────────────────────────────┘  │
│                                                      │
└──────────────────────────────────────────────────────┘
```

**Ara Avatar:**
- Warm illustration or photo-based circle avatar
- Deep mahogany or warm gold color scheme — not anime, not corporate
- Shows "typing..." animation (3 dots) while AI is responding
- Appears next to each AI message bubble

**Chat bubbles:**
- AI (Ara): left-aligned, background `#3f2b2e`, text Warm Linen
- User: right-aligned, background `#fdc903`, text `#3f2b2e`
- Montserrat 14px, 1.5 line height
- Subtle fade-in animation per message

**Quick-start buttons:**
- Pill shape, border `#fdc903`, text `#fdc903` on dark bg
- On tap: pre-fills and sends the prompt
- Disappear after first user message

**Input bar:**
- Sticky bottom within chat container on mobile
- Soft focus glow in `#fdc903` on active
- Send icon: arrow or paper plane

**Section background:** `#001022` Midnight Ink with subtle botanical texture overlay (optional)
**Section padding:** generous — this section should breathe

**Animation:**
- Section title reveals on scroll-enter
- Chat container slides up from below
- AI greeting message types in with character-by-character animation on first load
- Quick-start pills stagger fade-in after greeting appears

---

### 10. TRUST SECTION — "Mengapa Percaya Miriva?"
**Pattern:** Estrela "testimonials" — dark background image, carousel

**data-theme:** dark

**Layout:**
```
┌──────────────────────────────────────────────────────┐
│  [warm botanical background image — low opacity]     │
│                                                      │
│  Lab & Kepercayaan                                   │ ← overline, Montserrat small
│                                                      │
│  Bukan sekadar klaim.                                │ ← title, Noto Serif Condensed
│  Ada angkanya.                                       │
│                                                      │
│  ┌──────────────────────────────────────────────┐   │
│  │                                              │   │
│  │  "Aflatoksin 0,08 ppb — 250× di bawah        │   │
│  │   batas aman BPOM. Bukan estimasi,           │   │
│  │   bukan klaim — hasil lab Sucofindo."        │   │
│  │                                              │   │
│  │  🧪 Sucofindo Lab Certificate               │   │
│  └──────────────────────────────────────────────┘   │
│                                                      │
│  ◀ ————————————————————— ▶                          │ ← carousel nav
│                                                      │
│  Slide 2: Cold-pressed process data                  │
│  Slide 3: Single-origin provenance                   │
│  Slide 4: 1-micron filtration spec                   │
│                                                      │
└──────────────────────────────────────────────────────┘
```

**Carousel content (4 slides):**
1. Aflatoksin 0,08 ppb — Sucofindo lab result
2. Cold-pressed di bawah 50°C — process integrity
3. Single-origin Flores NTT — provenance traceability
4. Filtrasi mekanik 1 mikron — zero chemical additives

**Each slide:** Stat/headline in Noto Serif Condensed, explanation in Montserrat, source/badge line

**Animation:**
- Carousel slides with horizontal clip animation (not fade — a clean slide)
- Arrow nav: same custom arrow style as Estrela (SVG path arrow)
- Auto-plays every 5s, pauses on hover

**Colors:** Background `#001022`, text `#f7f2ea`, accent `#fdc903`

---

### 11. FAQ SECTION
**Pattern:** Estrela FAQ accordion with bracket toggle

**data-theme:** dark

**Layout:**
```
┌──────────────────────────────────────────────────────┐
│                                                      │
│  Pertanyaan Umum                                     │ ← Noto Serif Condensed, large
│                                                      │
│  ─────────────────────────────────────────────────  │
│  Apakah minyak kemiri cold-pressed               ( + )│ ← toggle bracket
│  berbeda dengan yang biasa?                          │
│  ─────────────────────────────────────────────────  │
│  [answer expands here]                               │
│  ─────────────────────────────────────────────────  │
│  Aman untuk ibu menyusui?                       ( + )│
│  ─────────────────────────────────────────────────  │
│  Sudah ada izin BPOM?                           ( + )│
│  ─────────────────────────────────────────────────  │
│  Berapa lama hasil terlihat?                    ( + )│
│  ─────────────────────────────────────────────────  │
│  Bisa untuk kulit kepala berminyak?             ( + )│
│  ─────────────────────────────────────────────────  │
│  Cara pakai yang benar?                         ( + )│
│  ─────────────────────────────────────────────────  │
│                                                      │
└──────────────────────────────────────────────────────┘
```

**Toggle:** Bracket animation `( + )` → `( − )` same as Estrela
**Answer expand:** smooth height transition (0.3s ease), no jump

**FAQ content:**

1. **Apa bedanya minyak kemiri cold-pressed dengan yang biasa?**
   Minyak kemiri biasa diproses dengan cara dibakar atau dipanaskan dengan suhu tinggi. Proses ini memang jauh lebih cepat dan murah, tapi panas menghancurkan sebagian besar senyawa aktif di dalamnya: asam linoleat, quercetin, dan enzim yang sebenarnya membuat kemiri efektif untuk rambut. Yang tersisa hanya lemak dasarnya saja. Miriva menggunakan cold-press mekanik dengan suhu di bawah 30°C. Tidak ada panas berlebih, tidak ada pelarut kimia. Semua senyawa aktif tetap utuh.

2. **Apakah aman untuk ibu menyusui?**
   Miriva tidak mengandung bahan kimia, pengawet, atau campuran sintetis, murni minyak kemiri cold-pressed, difiltrasi mekanik hingga 1 mikron. Walaupun begitu, kami tetap menyarankan konsultasi ke dokter terlebih dahulu, karena setiap kondisi ibu berbeda. Tapi dari sisi formulasi, tidak ada yang kami sembunyikan.

3. **Sudah ada izin BPOM?**
   Miriva sudah mengantongi sertifikasi Halal MUI dan setiap batch (300L) diuji oleh Sucofindo, lembaga pengujian independen terakreditasi nasional. Hasil uji aflatoksin kami: 0,08 ppb, atau 250 kali di bawah batas aman yang ditetapkan BPOM. Untuk nomor registrasi BPOM, prosesnya masih berjalan.

4. **Berapa lama hasilnya mulai terlihat?**
   Jujurnya: tidak instan. Rambut tumbuh dari akar, dan akar perlu waktu untuk pulih sebelum hasilnya terlihat di permukaan. Kebanyakan pengguna mulai merasakan perbedaan di minggu ke-4: kerontokan berkurang, kulit kepala terasa lebih sehat. Perubahan visual yang nyata (rambut baru tumbuh, tampilan lebih tebal) biasanya terlihat di minggu ke-8 ke atas.
   Miriva bukan obat. Ini perawatan. Seperti olahraga, hasilnya nyata, tapi datang karena konsisten, bukan karena satu malam.

5. **Apakah cocok untuk kulit kepala berminyak?**
   Ya, dan ini salah satu hal yang sering mengejutkan orang. Miriva punya rating komedogenik 2, yang artinya sangat kecil kemungkinannya menyumbat pori. Teksturnya ringan dan menyerap ke kulit kepala, bukan menempel di permukaan. Kalau kulitmu sangat berminyak, mulai dari 3–5 tetes saja, aplikasikan langsung ke kulit kepala (bukan batang rambut), dan bilas di pagi hari. Kulit kepala yang terhidrasi dengan baik justru cenderung memproduksi minyak lebih sedikit dalam jangka panjang, bukan lebih banyak.

**Colors:** Background `#3f2b2e`, text `#f7f2ea`, bracket `#fdc903`

---

### 12. CTA / PURCHASE SECTION
**Pattern:** Estrela "pre-footer" — full-width image with overlaid CTA

**Layout:**
```
┌──────────────────────────────────────────────────────┐
│  [full-width product/lifestyle image — warm, golden] │
│                                                      │
│              Mahkotamu menunggumu.                   │ ← Noto Serif Condensed, large, white
│                                                      │
│         Miriva 60ml — Minyak Kemiri Cold Pressed     │ ← Montserrat, small, Warm Linen
│              Single-origin Flores, NTT               │
│                                                      │
│     ┌─────────────────┐   ┌─────────────────┐       │
│     │  🛒 Beli Shopee  │   │  🛒 Beli Tokped  │       │ ← pill buttons, gold
│     └─────────────────┘   └─────────────────┘       │
│                                                      │
│          atau  [ Chat dengan Ara dulu ↑ ]            │ ← text link, scrolls back to chat
│                                                      │
└──────────────────────────────────────────────────────┘
```

**Image:** Warm, lifestyle shot — bottle in natural light, botanical surroundings
**Overlay:** `#001022` at 50% so image stays visible

**Buttons:**
- Harvest Gold `#fdc903`, text `#3f2b2e`, pill shape, Montserrat semibold
- These are the conversion endpoints — Shopee and Tokopedia static links
- On mobile: stacked vertically, full width

**Animation:**
- Headline reveals with large clip-path slide from bottom (dramatic)
- Buttons stagger in after headline
- Subtle parallax on background image

---

### 13. FOOTER
**Pattern:** Estrela dark two-column footer

**Layout:**
```
┌────────────────────────┬─────────────────────────────┐
│  🌿 MIRIVA             │                             │
│                        │  Punya pertanyaan?          │
│  Instagram             │  Chat dengan Ara →          │
│  TikTok                │                             │
│  Shopee                │  📍 Flores, NTT, Indonesia  │
│  Tokopedia             │                             │
│                        │  ✅ Halal  🧪 Sucofindo     │
├────────────────────────┴─────────────────────────────┤
│  © 2026 Miriva. Single-origin. Zero campuran.        │
└──────────────────────────────────────────────────────┘
```

**Colors:** Background `#001022`, text `#f7f2ea`, accent links `#fdc903` on hover
**Font:** Logo Noto Serif Condensed, links Montserrat 400

---

## Animation Summary

| Section | Key Animation | Library / Approach |
|---------|--------------|-------------------|
| Loader | Number counter, clip reveal | GSAP or CSS counter |
| Nav | Hide/show on scroll, theme switch | IntersectionObserver |
| Hero | Split headline slide-in, pill fade-up | GSAP or CSS keyframes |
| Empathy | Text line reveal, image parallax | IntersectionObserver + CSS |
| Science | Sticky featured col, card clip reveal | CSS position sticky |
| About | Title clip-in, image crossfade | CSS transitions |
| Ritual | Step card stagger, CTA pulse | IntersectionObserver + CSS keyframes |
| Chat | Typewriter greeting, message fade-in | Custom JS |
| Trust | Carousel horizontal slide | Custom JS |
| FAQ | Height accordion, bracket rotate | CSS transitions |
| CTA | Dramatic clip headline, parallax bg | CSS |
