# DevelopiaAI

DevelopiaAI is an AI‑powered Customer Service Chatbot you can embed in any website. Built with Laravel 12 and OpenAI, it provides 24/7 support by answering FAQs, tracking orders, sharing tutorials, and escalating to human agents when needed.

## 🚀 Features

- **Embedded Chat Widget**: Drop‑in JS snippet (OpenWidget) that mounts a branded chat UI.
- **AI‑Driven FAQ Lookup**: Answers common questions from a seeded knowledge base.
- **Order Tracking**: Retrieves order status via API (`/api/order/{id}`) and returns real‑time updates.
- **Tutorial & Video Sharing**: Serves links or embeds to documentation and tutorial videos.
- **Human Escalation**: Detects unsupported queries or `"talk to a human"` triggers and routes them to your support team.
- **Custom Training (RAG)**: Onboard your own FAQs and documents, vectorize content with embeddings, and power Retrieval‑Augmented Generation for tailored responses.

## 🛠️ Tech Stack

| Layer               | Technology                                    |
|---------------------|-----------------------------------------------|
| **Backend**         | Laravel 12, Sanctum/JWT                       |
| **Chat API**        | OpenAI GPT‑3.5/4, Retrieval‑Augmented Generation (RAG) |
| **Embeddings**      | Laravel Embeddings (vormkracht10), PostgreSQL + pgvector |
| **Frontend Widget** | Blade + OpenWidget JS                         |
| **Admin UI**        | Inertia + Vue 3 (future) / Livewire           |
| **Hosting**         | Vercel (static), Railway/Heroku (API)         |

## 🏁 Getting Started

### Prerequisites

- PHP 8.1+
- Composer
- Node.js & npm (for Inertia/Vue)
- PostgreSQL (with pgvector extension)
- OpenAI API key

### Installation

1. **Clone the repo**
   ```bash
   git clone https://github.com/your‑org/developia‑ai.git
   cd developia‑ai
   ```
2. **Install PHP dependencies**
   ```bash
   composer install
   ```
3. **Copy and configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Fill in database credentials, `APP_URL`, and `OPENAI_API_KEY`.

4. **Run migrations & seed FAQs**
   ```bash
   php artisan migrate
   php artisan db:seed --class=FaqSeeder
   ```

5. **(Optional) Install frontend dependencies**
   ```bash
   npm install
   npm run dev
   ```

### Usage

- **Chat Widget**: Visit `https://your‑app.com/chat` to see the embedded chat UI.
- **API Endpoints**:
  - `POST /api/chat` — handle user messages via OpenAI & RAG
  - `GET  /api/order/{id}` — fetch order status
  - `GET  /api/tutorials` — list tutorial/video links

- **Admin Dashboard** (future): Manage FAQs, documents, and client settings at `/admin`.

## 📈 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/YourFeature`)
3. Commit your changes (`git commit -m "Add YourFeature"`)
4. Push to the branch (`git push origin feature/YourFeature`)
5. Open a Pull Request

Please follow the [PSR‑12 coding standard](https://www.php-fig.org/psr/psr-12/) and write tests for new functionality.

## 📜 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

# -DevelopiaAI
