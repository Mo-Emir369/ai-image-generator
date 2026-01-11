# 🖼️ AI Image Generator (Stable Diffusion XL)

A simple **AI-powered image generation web app** built using **PHP, JavaScript, HTML, and CSS**, powered by **Hugging Face Stable Diffusion XL**.

Users can enter a text prompt and generate an AI image directly in the browser.

---

## 🚀 Features

* Generate images from text prompts
* Uses **Stable Diffusion XL** via Hugging Face Inference API
* Simple and clean UI
* Frontend & backend separated
* No frameworks required

---

## 🛠️ Technologies Used

* **PHP** (Backend API handler)
* **JavaScript (Fetch API)**
* **HTML5**
* **CSS3**
* **Hugging Face Inference API**
* **Stable Diffusion XL**

---

## 📂 Project Structure

```bash
.
├── index.html      # Frontend UI
├── style.css       # Styling
├── script.js       # Frontend logic
├── generate.php    # Backend API (PHP)
```

---

## ⚙️ Setup & Installation

### 1️⃣ Clone the repository

```bash
git clone https://github.com/your-username/ai-image-generator.git
cd ai-image-generator
```

### 2️⃣ Get Hugging Face API Token

* Go to 👉 [https://huggingface.co/settings/tokens](https://huggingface.co/settings/tokens)
* Create a **Read** token

### 3️⃣ Configure API Key

Open `generate.php` and replace:

```php
$API_KEY = "YOUR_HUGGINGFACE_TOKEN";
```

with:

```php
$API_KEY = "hf_xxxxxxxxxxxxxxxxx";
```

⚠️ **Important:**
Do NOT upload your real API key to GitHub.
Use `.env` or environment variables for production.

---

## ▶️ Run the Project

You need a local PHP server.

### Option 1: PHP built-in server

```bash
php -S localhost:8000
```

Then open:

```
http://localhost:8000/index.html
```

### Option 2: XAMPP / WAMP

* Place files in `htdocs`
* Start Apache
* Open in browser

---

## 🧠 How It Works

1. User enters a text prompt
2. Frontend sends prompt to `generate.php`
3. PHP sends request to Hugging Face API
4. Stable Diffusion XL generates image
5. Image is returned as **Base64**
6. Frontend displays the generated image

---

## 🖼️ Example Prompt

```
A futuristic city at sunset, cyberpunk style, ultra detailed
```
<p align="center"> <img src="./assets/example.png" width="600"> </p>

---

## 🔐 Security Notes

* Never expose your API key in frontend JavaScript
* Always keep API calls on the server (PHP)

