# DevelopiaAI

DevelopiaAI is an AI‑powered Customer Service Chatbot you can embed in any website. Built with Laravel 12 and OpenAI, it provides 24/7 support by answering FAQs, tracking orders, sharing tutorials, and escalating to human agents when needed.

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
| **Backend**         | Laravel 12, Sanctum/JWT                       |
| **Chat API**        | OpenAI GPT‑3.5/4, Retrieval‑Augmented Generation (RAG) |
| **Embeddings**      | Laravel Embeddings (vormkracht10), PostgreSQL + pgvector |
| **Frontend Widget** | Blade + OpenWidget JS                         |
| **Admin UI**        | Inertia + Vue 3 (future) / Livewire           |
| **Hosting**         | Vercel (static), Railway/Heroku (API)         |

## 🏁 Getting Started

### Prerequisites

- PHP 8.1+
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

4. **Configure your .env file**
   ```env 
   APP_NAME=DevelopiaAI
   APP_ENV=local
   APP_DEBUG=true
   APP_URL=http://localhost:8000

   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=developia_ai
   DB_USERNAME=your_username
   DB_PASSWORD=your_password

   OPENAI_API_KEY=your_openai_api_key
   OPENAI_MODEL=gpt-3.5-turbo
   ```

5. **Set up PostgreSQL with pgvector**
   ```bash
   # Install pgvector extension
   psql -d your_database_name -c "CREATE EXTENSION vector;"
   
   # Create the database
   createdb developia_ai
   ```

6. **Run migrations & seed FAQs**
   ```bash
   php artisan migrate
   php artisan db:seed --class=FaqSeeder
   ```

7. **Install frontend dependencies and build assets**
   ```bash
   npm install
   npm run dev
   ```

8. **Start the development server**
   ```bash
   php artisan serve
   ```

### Configuration

#### OpenAI Settings
In your `.env` file, configure OpenAI:
```env
OPENAI_API_KEY=your_api_key
OPENAI_MODEL=gpt-3.5-turbo
OPENAI_MAX_TOKENS=150
OPENAI_TEMPERATURE=0.7
```

#### Chat Widget Configuration
Add the following to your website:
```html
<script src="https://your-domain.com/widget.js"></script>
<script>
  OpenWidget.init({
    apiKey: 'your_api_key',
    endpoint: 'https://your-domain.com/api/chat',
    theme: 'dark',
    position: 'bottom-right',
    logo: 'https://your-domain.com/logo.svg'
  });
</script>
```

### Usage

- **Chat Widget**: Visit `https://your‑app.com/chat` to see the embedded chat UI.
- **API Endpoints**:
  - `POST /api/chat` — handle user messages via OpenAI & RAG
  - `GET  /api/order/{id}` — fetch order status
  - `GET  /api/tutorials` — list tutorial/video links

- **Admin Dashboard** (future): Manage FAQs, documents, and client settings at `/admin`.

### Development Workflow

1. **Adding New FAQs**
   ```bash
   php artisan make:seeder NewFaqSeeder
   # Edit database/seeders/NewFaqSeeder.php
   php artisan db:seed --class=NewFaqSeeder
   ```

2. **Testing the Chat API**
   ```bash
   curl -X POST https://your-domain.com/api/chat \
     -H "Content-Type: application/json" \
     -d '{"message": "What are your business hours?"}'
   ```

3. **Updating Embeddings**
   ```bash
   php artisan embeddings:update
   ```

## 🔧 Troubleshooting

### Common Issues

1. **pgvector extension not found**
   ```bash
   # Install PostgreSQL extensions
   sudo apt-get install postgresql-contrib
   sudo -u postgres psql -c "CREATE EXTENSION vector;"
   ```

2. **OpenAI API errors**
   - Verify your API key is correct
   - Check rate limits
   - Ensure proper model name

3. **Widget not loading**
   - Check browser console for errors
   - Verify CORS settings
   - Ensure API endpoint is accessible

## 📈 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/YourFeature`)
3. Commit your changes (`git commit -m "Add YourFeature"`)
4. Push to the branch (`git push origin feature/YourFeature`)
5. Open a Pull Request

Please follow the [PSR‑12 coding standard](https://www.php-fig.org/psr/psr-12/) and write tests for new functionality.

## 📜 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## 🤝 Support

For support, email support@developia-ai.com / opiaaustin@gmail.com or join our [Discord community](https://discord.gg/FQhNPxDr7v).
