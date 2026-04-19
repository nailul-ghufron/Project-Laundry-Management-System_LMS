# Design System Specification

## 1. Overview & Creative North Star: "The Pristine Flow"

This design system is built to transform the utility of a Laundry Management System (LMS) into a high-end, editorial-grade digital experience. We are moving away from the "utility software" aesthetic and toward **"The Pristine Flow."**

The North Star of this system is the sensation of freshly pressed linen: sharp, architectural, yet breathable. We achieve this by rejecting traditional "box-and-line" layouts in favor of **intentional asymmetry, tonal depth, and atmospheric layering.** By utilizing a sophisticated palette of blues and secondary accents, we create an environment that feels both clinically clean and authoritative.

---

### 2. Color Strategy: Depth over Definition

We define space through color shifts, not lines. Our palette is anchored in trust but elevated through a tiered surface system.

#### The "No-Line" Rule
Explicitly prohibit the use of 1px solid borders for sectioning or containers. Boundaries must be defined solely through background color transitions. For example, a `surface_container_lowest` card should sit atop a `surface_container_low` background to create a visible but soft edge.

#### Surface Hierarchy & Nesting
Treat the UI as a series of physical layers, similar to stacked sheets of frosted glass.
- **Base Layer:** `surface` (#fbf8ff)
- **Secondary Workspace:** `surface_container_low` (#f4f2fc)
- **Actionable Cards:** `surface_container_lowest` (#ffffff)
- **High-Priority Modals:** `surface_bright` (#fbf8ff)

#### The Glass & Gradient Rule
To move beyond a flat "template" feel, use **Glassmorphism** for floating elements (like quick-action menus or sidebar overlays). Utilize semi-transparent surface colors with a `backdrop-blur` of 12px-20px. 
For main CTAs, use a subtle linear gradient: 
`Linear Gradient (135deg, primary (#00288e) 0%, primary_container (#1e40af) 100%)`.

---

### 3. Typography: The Editorial Scale

We use **Inter** as our sole typeface, relying on a high-contrast scale to create an authoritative hierarchy. Typography is not just for reading; it is a structural element.

| Level | Size | Weight | Role |
| :--- | :--- | :--- | :--- |
| **display-lg** | 3.5rem | 700 (Bold) | Large data hero numbers (e.g., Today's Revenue) |
| **headline-md** | 1.75rem | 600 (Semi-Bold) | Section headers with generous letter-spacing (-0.02em) |
| **title-sm** | 1rem | 600 (Semi-Bold) | Data table headers and card titles |
| **body-md** | 0.875rem | 400 (Regular) | Primary data entry and body text |
| **label-sm** | 0.6875rem | 700 (Bold) | All-caps status indicators and micro-meta data |

**Design Note:** Use `on_surface_variant` (#444653) for secondary body text to ensure a soft, premium contrast that reduces eye strain during long management sessions.

---

### 4. Elevation & Depth: Tonal Layering

Traditional shadows are often heavy and dated. In this design system, we convey hierarchy through **Tonal Layering.**

- **The Layering Principle:** Achieve depth by "stacking." Place a `surface_container_lowest` card on a `surface_container_low` background. The subtle 2-3% shift in hex value creates a "soft lift" that feels more modern than a shadow.
- **Ambient Shadows:** For floating elements (Modals/Popovers), use an extra-diffused shadow:
  `box-shadow: 0 12px 40px rgba(26, 27, 34, 0.06);` (using a tinted version of `on_surface`).
- **The "Ghost Border" Fallback:** If a container requires further definition (e.g., high-density data), use the `outline_variant` (#c4c5d5) at **15% opacity**. Never use a 100% opaque border.

---

### 5. Components

#### Sidebar Navigation
The sidebar should feel like an architectural anchor. Use `surface_container` with no border. Active states should use a "pill" shape in `primary_fixed`, with the text in `on_primary_fixed`. Use generous vertical padding (32px) between navigation groups to create breathing room.

#### Data Tables (LMS Core)
- **No Divider Lines:** Separate rows using a subtle background shift on hover (`surface_container_high`).
- **Alignment:** Numbers must be tabular-lining and right-aligned. Text is left-aligned.
- **Status Badges:** Use the "Glass Pill" approach.
    - *Success/Selesai:* Background `secondary_fixed` (#6ffbbe) at 20% opacity, Text `on_secondary_container` (#00714d).
    - *Antre/Pending:* Background `tertiary_fixed` (#ffddb8) at 20% opacity, Text `tertiary` (#4c2e00).

#### Input Fields
Inputs should use `surface_container_highest` (#e3e1eb) with a `none` border and a `md` (0.375rem) corner radius. On focus, transition the background to `surface_container_lowest` and apply a "Ghost Border" of `primary` at 40% opacity.

#### Action Chips
For selecting laundry services (e.g., "Dry Clean," "Wash & Fold"), use `surface_container_low`. When selected, animate to `primary` with `on_primary` text.

---

### 6. Do's and Don'ts

#### Do
- **Do** use white space as a separator. If you feel the urge to add a line, add 16px of padding instead.
- **Do** use `primary_container` (#1E40AF) for primary actions to ground the "Cleanliness" theme.
- **Do** utilize `surface_container_lowest` for the main content area to make the data "pop" against the `surface` background.
- **Do** use asymmetrical layouts for dashboards—larger cards for "Revenue" and smaller, offset cards for "Recent Orders."

#### Don't
- **Don't** use pure black (#000000) for text. Always use `on_surface` (#1a1b22) for better tonal harmony.
- **Don't** use standard "drop shadows." If it looks like a 2010 web app, the shadow is too dark.
- **Don't** use high-saturation reds for errors. Use the `error` (#ba1a1a) and `error_container` (#ffdad6) tokens for a more sophisticated, "safety-first" feel.
- **Don't** crowd the sidebar. It is the "spine" of the application; let it breathe.