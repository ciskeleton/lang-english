# 🇺🇸 CiSkeleton Language Pack — English (US)

This repository contains the **default English language pack** for [CiSkeleton (CSK)](https://github.com/ciskeleton).

CSK uses a modular translation system, where each language is maintained as an independent package for easier updates and community contributions.

## 📦 Contents

* All default language files used by the CiSkeleton Core and Admin Interface.
* Organized following CodeIgniter's `/language/english/` structure.
* Acts as the **reference base** for all other translations.

## Structure

Each CSK translation must follow the naming convention `lang-<language>` and contain standard CodeIgniter files inside `language/<language>/ci3/` and CSK files inside `language/<language>/`. Admin files should be put inside `language/<languages>/admin/`.

## Contribution

If you want to contribute a new language to CSK:

1. Start from this repository.
2. Add your translations.
3. Test your language thoroughly.
4. Contact the CSK maintainer for review.
5. Once approved, the repository will be transferred to the [`ciskeleton`](https://github.com/ciskeleton) organization and renamed to `lang-<yourlanguage>`.
6. After the transfer, continue development in the official repository.

> ⚙️ CSK automation will handle adding the approved language to the [official package](https://github.com/ciskeleton/packages) registry and processing future releases.

## 🌍 Related Repositories

This repository belongs to the [`packages`](https://github.com/ciskeleton/packages) collection:

| Language | Source | Code |
| :------- | :----: | :--: |
| English | [`english`](https://github.com/ciskeleton/lang-english) | `en-US` (default) |
| Arabic (العربية) | [`arabic`](https://github.com/ciskeleton/lang-arabic) | `ar-DZ` |
| Armenian (Հայերեն) | [`armenian`](https://github.com/ciskeleton/lang-armenian) | `hy-AM` |
| Bengali (বাংলা) | [`bengali`](https://github.com/ciskeleton/lang-bengali) | `bn-BD` |
| Bulgarian (Български) | [`bulgarian`](https://github.com/ciskeleton/lang-bulgarian) | `bg-BG` |
| Catalan (Català) | [`catalan`](https://github.com/ciskeleton/lang-catalan) | `ca-ES` |
| Chinese - Simplified (简体中文) | [`chinese`](https://github.com/ciskeleton/lang-chinese) | `zh-CN` |
| Chinese - Traditional (繁體中文) | [`taiwanese`](https://github.com/ciskeleton/lang-taiwanese) | `zh-TW` |
| Croatian (Hrvatski) | [`croatian`](https://github.com/ciskeleton/lang-croatian) | `hr-HR` |
| Czech (Čeština) | [`czech`](https://github.com/ciskeleton/lang-czech) | `cs-CZ` |
| Danish (Dansk) | [`danish`](https://github.com/ciskeleton/lang-danish) | `da-DK` |
| Dutch (Nederlands) | [`dutch`](https://github.com/ciskeleton/lang-dutch) | `nl-NL` |
| Estonian (Eesti) | [`estonian`](https://github.com/ciskeleton/lang-estonian) | `et-EE` |
| Filipino (Filipino) | [`filipino`](https://github.com/ciskeleton/lang-filipino) | `fil-PH` |
| Finnish (Suomi) | [`finnish`](https://github.com/ciskeleton/lang-finnish) | `fi-FI` |
| French (Français) | [`french`](https://github.com/ciskeleton/lang-french) | `fr-FR` |
| Georgian (ქართული) | [`georgian`](https://github.com/ciskeleton/lang-georgian) | `ka-GE` |
| German (Deutsch) | [`german`](https://github.com/ciskeleton/lang-german) | `de-DE` |
| Greek (Ελληνικά) | [`greek`](https://github.com/ciskeleton/lang-greek) | `el-GR` |
| Hindi (हिन्दी) | [`hindi`](https://github.com/ciskeleton/lang-hindi) | `hi-IN` |
| Hungarian (Magyar) | [`hungarian`](https://github.com/ciskeleton/lang-hungarian) | `hu-HU` |
| Indonesian (Bahasa Indonesia) | [`indonesian`](https://github.com/ciskeleton/lang-indonesian) | `id-ID` |
| Italian (Italiano) | [`italian`](https://github.com/ciskeleton/lang-italian) | `it-IT` |
| Japanese (日本語) | [`japanese`](https://github.com/ciskeleton/lang-japanese) | `ja-JP` |
| Korean (한국어) | [`korean`](https://github.com/ciskeleton/lang-korean) | `ko-KR` |
| Latvian (Latviešu) | [`latvian`](https://github.com/ciskeleton/lang-latvian) | `lv-LV` |
| Lithuanian (Lietuvių) | [`lithuanian`](https://github.com/ciskeleton/lang-lithuanian) | `lt-LT` |
| Malay (Bahasa Melayu) | [`malay`](https://github.com/ciskeleton/lang-malay) | `ms-MY` |
| Norwegian (Norsk) | [`norwegian`](https://github.com/ciskeleton/lang-norwegian) | `nb-NO` |
| Persian (فارسی) | [`persian`](https://github.com/ciskeleton/lang-persian) | `fa-IR` |
| Polish (Polski) | [`polish`](https://github.com/ciskeleton/lang-polish) | `pl-PL` |
| Portuguese (Português) | [`portuguese`](https://github.com/ciskeleton/lang-portuguese) | `pt-PT` |
| Portuguese - Brazil (Português do Brasil) | [`brazilian`](https://github.com/ciskeleton/lang-brazilian) | `pt-BR` |
| Romanian (Română) | [`romanian`](https://github.com/ciskeleton/lang-romanian) | `ro-RO` |
| Russian (Ру́сский) | [`russian`](https://github.com/ciskeleton/lang-russian) | `ru-RU` |
| Serbian (Srpski) | [`serbian`](https://github.com/ciskeleton/lang-serbian) | `sr-RS` |
| Slovak (Slovenčina) | [`slovak`](https://github.com/ciskeleton/lang-slovak) | `sk-SK` |
| Slovenian (Slovenski) | [`slovenian`](https://github.com/ciskeleton/lang-slovenian) | `sl-SI` |
| Spanish (Español) | [`spanish`](https://github.com/ciskeleton/lang-spanish) | `es-ES` |
| Swahili (Kiswahili) | [`swahili`](https://github.com/ciskeleton/lang-swahili) | `sw-TZ` |
| Swedish (Svenska) | [`swedish`](https://github.com/ciskeleton/lang-swedish) | `sv-SE` |
| Tamil (தமிழ்) | [`tamil`](https://github.com/ciskeleton/lang-tamil) | `ta-IN` |
| Thai (ไทย) | [`thai`](https://github.com/ciskeleton/lang-thai) | `th-TH` |
| Turkish (Türkçe) | [`turkish`](https://github.com/ciskeleton/lang-turkish) | `tr-TR` |
| Ukrainian (Українська) | [`ukrainian`](https://github.com/ciskeleton/lang-ukrainian) | `uk-UA` |
| Urdu (اردو) | [`urdu`](https://github.com/ciskeleton/lang-urdu) | `ur-PK` |
| Vietnamese (Tiếng Việt) | [`vietnamese`](https://github.com/ciskeleton/lang-vietnamese) | `vi-VN` |

## 📖 About CiSkeleton (CSK)

[CiSkeleton (CSK)](https://github.com/ciskeleton) is a modular platform foundation providing multilingual support, an admin panel, extensibility, and other application-level features.
