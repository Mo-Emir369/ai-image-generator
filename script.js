const input = document.getElementById("inpu");
const imagesContainer = document.querySelector(".imgs");

async function getimges() {
    if (!input.value.trim()) {
        imagesContainer.innerHTML = "Please enter a prompt";
        return;
    }

    imagesContainer.innerHTML = "⏳ Generating image...";

    try {
        const response = await fetch("generate.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ prompt: input.value })
        });

        const data = await response.json();

        if (data.error) {
            imagesContainer.innerHTML = " error " + data.error;
            console.error(data.details);
            return;
        }

        const img = document.createElement("img");
        img.src = "data:image/png;base64," + data.image;
        img.width = 512;

        imagesContainer.innerHTML = "";
        imagesContainer.appendChild(img);

    } catch (err) {
        console.error(err);
        imagesContainer.innerHTML = "Failed to generate image";
    }
}
