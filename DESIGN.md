# Design: Grip Restore — Resistance Ladder

Replacement world for the full Laravel app (locked direction: grounded candidate 4 of 7, seed `4f27d48f`). Light is morning-clinic light: light warm ground, never dark mode by default.

## Palette

- `paper #F7F4ED` ground, `paper-deep #EFE9DB` wells, `white` ledgers, hairline `rule #E0DCC4` (elevation is border OR shadow — ledgers use border only).
- `ink #22302B` text, `ink-soft #43564F` body-secondary, `ink-faint #4B5F57` for 12px mono measurements only (AA on paper and white).
- Committed accent `pine #0E5F56`, `pine-deep #0A453F`, `pine-wash #DDE9E4` for selected/hover fills. Pine carries nav rule, primary buttons, active links, focus rings, selection.
- Putty-grade rung hues mark difficulty everywhere a grade appears: `rung-easy #5E8F71`, `rung-medium #9A6B1F`, `rung-hard #9E4A30` (safelisted in `tailwind.config.js` for dynamic grade dots; destructive actions use rung-hard).

## Type

- Public Sans (Bunny) for everything; headlines weight 800, tracking −0.025em, `text-wrap: balance`, max scale 6xl. Body measure capped by `max-w-3xl` containers.
- JetBrains Mono (Bunny) for measurements ONLY: tempo/readout labels, stat digits, table numerals with `tnum` tabular figures. Never decorative mono.

## Components

- `.ledger`: white card, 1px rule border, 14px radius. `.btn-care` solid pine / `.btn-quiet` outlined. `.grade-dot` 10px difficulty dot. `.rung-row` hairline-separated row. `.measure` 12px tracked mono label. No kickers/eyebrows; section numbers only where the sequence is the content (How-it-works 01–04).
- Gesture plates are drawn inline SVG, single 2.5px round stroke in pine: converging pinch lines with nodes, folded fist box, four-bar open palm. No emoji anywhere.
- One authored motion: `.rung-meter` five-bar tempo tick (exponential ease, already-visible default, disabled under `prefers-reduced-motion`).
- Browser surfaces themed: pine selection, pine caret, paper track with pine thumb scrollbar, 3px underline offset, `:focus-visible` 2px pine ring (never suppressed — components must not carry `focus:outline-none`).

## Surfaces

- Home (Persuade): headline + tempo readout + action beside the resistance-ladder ledger pinning three gesture grades; ruled proof strip with dividers; numbered session sequence; pine close.
- About (Read): two ledgers (system overview, MVC mapping) + graded landmark rows + scoring line. Claims match controllers exactly.
- Contact: split intro + ledger form; same fields/validation/routes.
- Dashboard, Sessions, forms (Operate): therapy ledger — monumental session count, ruled stat rows with honest bands (score band is average-against-best), recent list with grade dots, tabular session table, 44px action targets, labelled nav with grade-mark wordmark.

## Provenance

No raster imagery ships in this build; all iconography is hand-authored SVG in the files above. No synthetic or stock assets to replace.
