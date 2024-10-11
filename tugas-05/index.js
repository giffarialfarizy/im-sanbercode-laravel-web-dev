import { items } from './data-barang.js';

// DOMs
const listBarang = document.getElementById('listBarang');
const formItem = document.getElementById('formItem');
const cartButton = document.getElementById('cart');

// Variables
let cartCount = 0;

// Functions
const renderItems = (itemsToRender) => {
	listBarang.innerHTML = '';

	if (itemsToRender.length === 0) {
		const noItemsMessage = `<div class="col-12 mt-2">
        <p class="text-center">No items found</p>
      </div>`;
		listBarang.insertAdjacentHTML('beforeend', noItemsMessage);
		return;
	}

	itemsToRender.forEach((item) => {
		const [id, name, price, description, img] = item;

		const card = `<div class="col-4 mt-2" id="${id}">
						<div class="card" style="width: 18rem">
							<img
								src="./img/${img}"
								class="card-img-top"
								height="200px"
								width="200px"
								alt="${name}"
							/>
							<div class="card-body">
								<h5 class="card-title" id="itemName">${name}</h5>
								<p class="card-text" id="itemDesc">${description}</p>
								<p class="card-text">Rp${price}</p>
								<a href="#" class="btn btn-primary" id="addCart">
									Tambahkan ke keranjang
								</a>
							</div>
						</div>
					</div>`;

		listBarang.insertAdjacentHTML('beforeend', card);
	});

	document.querySelectorAll('#addCart').forEach((button) => {
		button.addEventListener('click', handleAddToCart);
	});
};

const updateCartCount = () => {
	cartButton.innerHTML = `<i class="fas fa-shopping-cart"></i>(${cartCount})`;
};

const handleAddToCart = (event) => {
	event.preventDefault();
	cartCount++;
	updateCartCount();
};

const handleSubmit = (event) => {
	event.preventDefault();

	const keyword = document.getElementById('keyword').value.toLowerCase();
	const filteredItems = items.filter((item) => {
		const name = item[1].toLowerCase();
		return name.includes(keyword);
	});

	renderItems(filteredItems);
};

// Initial render
renderItems(items);

// Rerender upon submit clicked
formItem.addEventListener('submit', handleSubmit);
