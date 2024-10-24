<!DOCTYPE html>
<html lang="en">

<head>


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <section id="image-preview" data-variant="1" data-background="hide">
        <div class="max-div d-flex flex-column container">
            <div class="summary-box" data-variant="image-preview-3">
                <h3 class="summary-title">Mixxx</h3>
                <p class="summary-subtitle body-large-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>

            <div class="content-box" data-variant="image-preview-3" id="mixGrid">
                <!-- Images will be dynamically inserted here -->
            </div>
        </div>

    </section>

    <script>
        const fetchAllThree = async () => {
            try {
                const response = await axios.get(
                    'https://api.thecatapi.com/v1/images/search?size=med&mime_types=jpg&format=json&has_breeds=true&order=RANDOM&page=0&limit=30', {
                    headers: {
                        'x-api-key': 'live_QRsENI86JSK8bQhRHy3KQTLpyRn5PoyjX3bGqy6nyTRSnYXy0TTg5cP4dLBzQ3Ya'
                    }
                }
                );
                const favourite = response.data;

                renderGaleri(favourite.slice(0, 12));
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        };

        const renderGaleri = (data) => {
            const galeriCardsElement = document.getElementById('mixGrid');
            galeriCardsElement.innerHTML = ''; // Clear existing content

            // Loop through the data and create cards
            for (let index = 0; index < data.length; index++) {
                const itemCard = document.createElement('div');
                itemCard.className = 'galeri-card';

                const img = document.createElement('img');
                img.src = data[index].url; // Access the URL
                img.alt = "Cat image"; // Alt text for accessibility
                img.className = "galeri-img"

                const text = document.createElement('p');
                text.className = "galeri-text body-large-semibold";
                text.textContent = data[index].id;

                // Calculate row number
                const rowIndex = Math.floor(index / 2);

                // Determine card sizes based on row index
                if (index === data.length - 1 && data.length % 2 !== 0) {
                    // Last item in an odd list (span the full container width)
                    itemCard.classList.add('full-width');
                } else if (rowIndex % 2 === 0) {
                    // Even row: 720px - 340px
                    if (index % 2 === 0) {
                        itemCard.classList.add('wide-card');
                    } else {
                        itemCard.classList.add('narrow-card');
                    }
                } else {
                    // Odd row: 340px - 720px
                    if (index % 2 === 0) {
                        itemCard.classList.add('narrow-card');
                    } else {
                        itemCard.classList.add('wide-card');
                    }
                }

                itemCard.appendChild(text);
                itemCard.appendChild(img);
                galeriCardsElement.appendChild(itemCard);
            }
        };


        fetchAllThree();
    </script>
</body>

</html>