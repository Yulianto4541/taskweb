const data = async function () {
    try {
        const url = 'https://reptile.developmentpath.co.uk/test/recruitment/sample-deals-data.json';
        // const url = '/sample-deals-data.json';
        let headers = new Headers();
            headers.append('Accept','application/json')

        const get = await fetch(url, {
            cache: 'default',
        });
        const data = await get.json();
        const slider = document.querySelector(".slider-hotel");
        let result = '';

        data.searchResult.holidays.forEach(item => {
            console.log(item)
            result += `
                <div class="slider-hotel-item">
                    <img src="${item.accommodation.imageUrl}">
                    <div class="content">
                        <h2>${item.accommodation.name}</h2>
                        <b class="card-text">Amount: $${item.accommodation.actualPrice} Discount : $${item.accommodation.discountedPrice}</b>
                        <p>${item.accommodation.featureCodesAndValues.overview_2_new[0]}</p>
                        <a href="https://www.tui.co.uk${item.accommodation.url}" class="acomodation">More Details</a>
                    </div>
                </div>
            `;
        });

        slider.innerHTML = result;

        $(document).ready(function () {
            $('#slider-hotel').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: true,
                centerMode: true,
                variableWidth: true,
                autoplay: true,
                autoplaySpeed: 5000
            });
        });
    } catch (error) {
        console.error('Error fetching data:', error);
    }
}

data();
