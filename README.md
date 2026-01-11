
```md
# 🖼️ AI Image Generator

AI Image Generator is a simple web application that generates images using artificial intelligence based on a **text prompt** provided by the user.

This project is built for practical learning and demonstrates **frontend, backend, and API integration** in a clean and understandable way.

---

## ✨ Features

- Generate images from text prompts
- Simple and clean user interface
- Asynchronous requests using Fetch API
- PHP backend to securely handle API requests
- Base64 image rendering in real time
- Suitable as a portfolio or learning project

---

## 🧠 How It Works

1. The user enters a text prompt
2. JavaScript sends the prompt to `generate.php`
3. PHP forwards the request to the Hugging Face API
4. The API returns the generated image
5. The image is displayed instantly in the browser

---

## 🛠️ Tech Stack

### Frontend
- HTML5
- CSS3
- Vanilla JavaScript (Fetch API)

### Backend
- PHP
- cURL

### AI Service
- Hugging Face Inference API

---

## 📁 Project Structure

```

ai-image-generator/
│
├── index.html      # User interface
├── style.css       # Styling
├── script.js       # Frontend logic
├── generate.php    # Backend & API handler
└── README.md

````

---

## ⚙️ Run Locally

### 1️⃣ Clone the repository
```bash
git clone https://github.com/Mo-Emir369/ai-image-generator.git
cd ai-image-generator
````

### 2️⃣ Start a local PHP server

```bash
php -S localhost:8000
```

### 3️⃣ Open in your browser

```
http://localhost:8000
```

---

## 🔐 Security Notes

* The API key is handled only on the backend
* No sensitive keys are exposed to the frontend
* Designed for learning and demonstration purposes

---

## 🚀 Future Improvements

* Improved UI/UX
* Loading indicator
* Multiple image generation
* Image history or download option
* Support for multiple AI models
* Better error handling


GitHub:
👉 [https://github.com/Mo-Emir369](https://github.com/Mo-Emir369)
قولي وأنا أكمّل معك 💪🔥
