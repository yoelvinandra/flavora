# Miriva Chat — AI Customer Support

Chat website for Miriva's AI assistant, **Ara** — a hair care specialist powered by Gemma 4 (26B) via OpenRouter.

## Tech Stack

- **Next.js 15** — App Router, React Server Components
- **TypeScript** — Type safety
- **Tailwind CSS** — Styling with amber/gold theme (Miriva brand)
- **OpenRouter API** — LLM integration (Gemma 4: 26B)

## Getting Started

### 1. Install dependencies

```bash
npm install
```

### 2. Set up environment variables

Copy `.env.example` to `.env.local` and add your OpenRouter API key:

```bash
cp .env.example .env.local
```

Then edit `.env.local`:

```
OPENAI_API_KEY=sk-or-v1-your-key-here
```

Get a free API key at [OpenRouter](https://openrouter.ai/).

### 3. Run the development server

```bash
npm run dev
```

Open [http://localhost:3000](http://localhost:3000) in your browser.

## Project Structure

```
miriva-chat/
├── src/
│   ├── app/
│   │   ├── api/chat/route.ts    # API route for LLM calls
│   │   ├── globals.css           # Global styles + custom scrollbar
│   │   ├── layout.tsx            # Root layout
│   │   └── page.tsx              # Main chat page (client component)
│   ├── lib/
│   │   └── system-prompt.ts      # Ara's system prompt (Indonesian)
│   └── types/
│       └── message.ts            # Message type definition
├── public/                        # Static assets
├── .env.local                     # Environment variables (gitignored)
├── .env.example                   # Example environment variables
└── tailwind.config.ts             # Tailwind configuration
```

## Features

- **Warm, conversational UI** — Amber/gold theme matching Miriva brand
- **Full system prompt** — All 10 rules from the test runs (pronoun "aku", "Bunda" logic, Sucofindo data, etc.)
- **Safe handling** — Medical disclaimers, adverse reaction protocol, allergy escalation
- **Mobile responsive** — Works on all screen sizes
- **Loading states** — Animated typing indicator while waiting for response

## Deployment

Deploy to Vercel (recommended):

```bash
vercel
```

Set the `OPENAI_API_KEY` environment variable in your Vercel project settings.

## System Prompt Status

The system prompt has been tested with 26 scenarios across 5 test runs:
- **Run 5 score: 9.3/10 average**, 9/10 minimum
- All fixes verified: pronoun consistency, "Bunda" context logic, non-comedogenic rule, safety claim softening
- See `../Chatbot-Test-Run-5.md` for full test results
