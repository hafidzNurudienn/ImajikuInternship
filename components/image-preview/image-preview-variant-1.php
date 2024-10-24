<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .summary-box[data-variant="image-preview-1"],
        .summary-box[data-variant="image-preview-2"],
        .summary-box[data-variant="image-preview-3"] {
            margin-block-end: var(--spacing-xl);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .summary-box[data-variant="image-preview-1"] .summary-title::after {
            content: "";
            display: block;
            width: 160px;
            height: 4px;
            background-color: var(--gray-400);
            border-radius: var(--rounded-lg);
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .summary-box[data-variant="image-preview-1"] .summary-subtitle {
            display: none;
        }

        .summary-box[data-variant="image-preview-2"] .summary-subtitle,
        .summary-box[data-variant="image-preview-3"] .summary-subtitle {
            display: block;
        }

        .summary-box[data-variant="image-preview-2"] .summary-title::after,
        .summary-box[data-variant="image-preview-3"] .summary-title::after {
            display: none;
        }

        .content-box[data-variant="image-preview-1"] .galeri-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .content-box[data-variant="image-preview-2"] .galeri-text,
        .content-box[data-variant="image-preview-3"] .galeri-text {
            display: none;
        }

        .content-box[data-variant="image-preview-1"] {
            display: grid;
            gap: var(--spacing-md);
            margin: 0 auto;
            width: 100%;
        }

        .content-box[data-variant="image-preview-2"] {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            row-gap: var(--spacing-xl);
            place-items: center;
        }

        .content-box[data-variant="image-preview-3"] {
            columns: 300px;
            align-items: center;
            justify-content: center;
        }

        .content-box[data-variant="image-preview-1"] .galeri-card {
            position: relative;
            width: 350px;
            height: 233px;
            border-radius: var(--rounded-lg);
            overflow: hidden;
            background-color: var(--gray-300);
            transition: all ease-in-out 3ms;
        }

        .content-box[data-variant="image-preview-1"] .galeri-card img:hover {
            transform: scale(115%);
            transition: all ease-in-out 3ms;
        }

        .content-box[data-variant="image-preview-2"] .galeri-card {
            border-radius: var(--rounded-lg);
            overflow: hidden;
            background-color: var(--gray-300);
            position: relative;
        }

        .content-box[data-variant="image-preview-3"] .galeri-card {
            border-radius: var(--rounded-lg);
            overflow: hidden;
            position: relative;
            margin-block-end: var(--spacing-3xl);
            overflow: hidden;
        }

        .content-box[data-variant="image-preview-2"] .wide-card {
            height: 330px;
            width: 59%;
        }

        .content-box[data-variant="image-preview-2"] .narrow-card {
            height: 330px;
            width: 39%;
        }

        .content-box[data-variant="image-preview-2"] .full-width {
            width: 100%;
            height: 330px;
        }

        .content-box[data-variant="image-preview-3"] .wide-card {
            width: auto;
            height: fit-content;
        }

        .content-box[data-variant="image-preview-3"] .narrow-card {
            width: auto;
            height: fit-content;
        }

        .content-box[data-variant="image-preview-3"] .full-width {
            width: auto;
            height: fit-content;
        }

        .content-box[data-variant="image-preview-1"] .galeri-img {
            height: 330px;
            width: 100%;
            object-fit: cover;
        }

        .content-box[data-variant="image-preview-2"] .galeri-img {
            height: 330px;
            width: 100%;
            object-fit: cover;
        }

        .content-box[data-variant="image-preview-3"] .galeri-img {
            width: 100%;
            object-fit: cover;
        }

        @media (min-width: 1200px) {
            .content-box[data-variant="image-preview-1"] {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (min-width: 685px) and (max-width: 1199px) {
            .content-box[data-variant="image-preview-1"] {
                grid-template-columns: repeat(2, 1fr);
            }

            .content-box[data-variant="image-preview-1"] .galeri-card {
                width: 100%;
            }

        }

        @media (max-width: 684px) {
            .content-box[data-variant="image-preview-1"] {
                width: 100%;
                grid-template-columns: 1fr;
            }

            .content-box[data-variant="image-preview-1"] .galeri-card {
                width: 100%;
            }

            .content-box[data-variant="image-preview-2"] {
                width: 100%;
                height: 330px;
            }

            .content-box[data-variant="image-preview-2"] .wide-card,
            .content-box[data-variant="image-preview-2"] .narrow-card,
            .content-box[data-variant="image-preview-2"] .full-width {
                width: 100%;
                height: 330px;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <section id="image-preview" data-variant="1" data-background="hide">
        <div class="max-div d-flex flex-column container">
            <div class="summary-box" data-variant="image-preview-1">
                <h3 class="summary-title">Mixxx</h3>
                <p class="summary-subtitle body-large-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>

            <div class="content-box" data-variant="image-preview-1" id="mixGrid">
                <!-- Images will be dynamically inserted here -->
            </div>
        </div>

    </section>

    <script>
        const fetchAllOne = async () => {
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


        fetchAllOne();
    </script>
</body>

</html>