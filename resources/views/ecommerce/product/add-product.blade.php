@extends('layout.main')
@section('container')

<div class="main-content app-content">
  <div class="container-fluid">
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Add Product</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="{{ route('ecommerce') }}">Ecommerce</a></li>
                          <li class="breadcrumb-item"><a href="{{ route('products') }}">Products</a></li>
                          <li class="breadcrumb-item"><a href="{{ route('product-list') }}">My Products</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                      </ol>
                  </nav>
              </div>
          </div>
          <div class="btn-list">
            <a href="{{ route('product-list') }}">
              <button type="button" class="btn btn-special-light btn-wave waves-effect waves-light">
                <i class="ri-box-3-line"></i> My Products
              </button>
            </a>
            <a href="{{ route('product-list') }}">
              <button type="button" class="btn btn-secondary-light btn-wave waves-effect waves-light">
                <i class="ri-close-line"></i> Cancel
              </button>
            </a>
          </div>
      </div>
        <div class="row">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="p-3 border-bottom border-top border-block-end-dashed tab-content">
                      <div class="tab-pane show active p-0 border-0" id="main-info" role="tabpanel" aria-labelledby="account" tabindex="0">
                          <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-1">
                              <div class="fw-semibold d-block fs-15">General Information :</div>
                              {{-- <button class="btn btn-secondary">Add Product<i class="bi bi-plus-lg ms-2"></i></button> --}}
                          </div>
                          <div class="row gy-3">
                              <div class="col-xl-12">
                                  <label for="product-name" class="form-label">Product Name </label>
                                  <input type="text" class="form-control" name="name" id="product-name" placeholder="Name" required>
                              </div>
                              <div class="col-xl-6">
                                  <label for="product-price" class="form-label">Price</label>
                                  <input type="text" class="form-control currency-format" name="price" id="product-price" placeholder="Cost" required>
                              </div>
                              <div class="col-xl-6">
                                  <label for="product-actual-price" class="form-label">Actual Price</label>
                                  <input type="text" class="form-control currency-format" name="actual_price" id="product-actual-price" placeholder="Cost" required>
                              </div>
                              <div class="col-xl-6">
                                  <label class="form-label">Discount Type</label>
                                      <div class="row gy-2">
                                          <div class="col-xxl-4">
                                              <div class="card custom-card mb-0 border card-style-6">
                                                  <div class="card-body px-3 py-2">
                                                      <div class="d-flex align-items-center justify-content-between mb-0">
                                                          <div class="flex-grow-1">
                                                          No Discount
                                                          </div>
                                                          <div class="min-w-fit-content">
                                                              <div class="d-flex gap-2">
                                                                  <input class="form-check-input m-0" type="radio" id="no-discount" name="discount_type" value="no discount" checked>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-xxl-4">
                                              <div class="card custom-card border mb-0 card-style-6">
                                                  <div class="card-body px-3 py-2">
                                                      <div class="d-flex align-items-center justify-content-between mb-0">
                                                          <div class="flex-grow-1">
                                                              Percentage %
                                                          </div>
                                                          <div class="min-w-fit-content">
                                                              <div class="d-flex gap-2">
                                                                  <input class="form-check-input m-0" type="radio" id="percentage" name="discount_type" value="percentage">
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-xxl-4">
                                              <div class="card custom-card border mb-0 card-style-6">
                                                  <div class="card-body px-3 py-2">
                                                      <div class="d-flex align-items-center justify-content-between mb-0">
                                                          <div class="flex-grow-1">
                                                              Fixed Price
                                                          </div>
                                                          <div class="min-w-fit-content">
                                                              <div class="d-flex gap-2">
                                                                  <input class="form-check-input m-0" type="radio" id="fixed-price" name="discount_type" value="fixed">
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                              </div>
                              <div class="col-xl-6">
                                  <label for="product-discount" class="form-label">Discount</label>
                                  <input type="text" class="form-control" name="discount" id="product-discount" placeholder="Discount in %" required>
                              </div>

                              <div class="col-xl-6">
                                  <label for="product-category-add" class="form-label">Category</label>
                                  <select class="form-control" name="category" data-trigger id="product-category" required>
                                      <option value="">Category</option>
                                      @foreach($categories as $category)
                                      <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                                      @endforeach
                                  </select>
                              </div>
                              <div class="col-xl-6">
                                <label for="product-brand" class="form-label">Brand</label>
                                <input type="text" class="form-control" name="brands" id="product-brand" placeholder="Product Brands" required>
                              </div>
                              <div class="col-xl-6">
                                  <label for="product-availability" class="form-label">Product Availability</label>
                                  <select class="form-control" name="availability" data-trigger id="product-availability" required>
                                      <option value="">Availability Status</option>
                                      <option value="In Stock">In Stock</option>
                                      <option value="out of Stock">Out of Stock</option>
                                      <option value="Pre Order">Pre Order</option>
                                  </select>
                              </div>
                              <div class="col-xl-6">
                                <label for="product-stock" class="form-label">Overall Stock</label>
                                <input type="text" class="form-control" id="product-stock" value="1" required>
                              </div>
                              <div class="col-xl-12">
                                <div class="product-dropzone" id="product-dropzone">
                                  <p class="fw-medium mb-3 fs-14">Select Image/Video :</p>
                                  <input type="file" id="file-input" class="product-Images" name="external-files[]" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6" style="display: none;" required>
                                  <div id="drop-area" class="drop-area bg-primary-transparent">
                                      <p>Drag and drop your images here or click to select files</p>
                                  </div>
                                  <div id="preview" class="preview"></div>
                              </div>
                              <div class="col-xl-12">
                                  <label for="product-description" class="form-label">Product Description</label>
                                  <textarea class="form-control" name="description" id="product-description" rows="5" required></textarea>
                                  <label for="product-description" class="form-label mt-1 fs-12 op-5 text-muted mb-0">*Description should not exceed 2400 letters</label>
                              </div>

                          </div>
                      </div>
                  </div>
                  <div class="card-footer border-top-0">
                      <div class="btn-list float-end">
                        <button type="button" id="confirm-button" class="btn btn-secondary btn-waves waves-effect waves-light">
                          <i class="ri-check-line"></i>
                          Confirm Product
                        </button>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  const productName = document.getElementById('product-name');
  const productPrice = document.getElementById('product-price');
  const productFixedPrice = document.getElementById('product-actual-price');
  const discountType = document.querySelectorAll('[name="discount_type"]');
  const productDiscount = document.getElementById('product-discount');
  const productCategory = document.getElementById('product-category');
  const productBrands = document.getElementById('product-brand');
  const productAvailability = document.getElementById('product-availability');
  const productDescription = document.getElementById('product-description');
  const productStock = document.getElementById('product-stock');

  const dropArea = document.getElementById('drop-area');
  const fileInput = document.getElementById('file-input');
  const preview = document.getElementById('preview');

  const confirmButton = document.getElementById('confirm-button');

  const uploadedFiles = [];

  dropArea.addEventListener('click', () => fileInput.click());

  fileInput.addEventListener('change', () => handleFiles(fileInput.files));

  dropArea.addEventListener('dragover', (e) => {
    e.preventDefault();
    dropArea.classList.add('dragging');
  });

  dropArea.addEventListener('dragleave', () => {
    dropArea.classList.remove('dragging');
  });

  dropArea.addEventListener('drop', (e) => {
    e.preventDefault();
    dropArea.classList.remove('dragging');
    handleFiles(e.dataTransfer.files);
  });

  function handleFiles(files) {
    const fileArray = Array.from(files);
    fileArray.forEach((file) => {
      if (file.type.startsWith('image/')) {
        uploadedFiles.push(file);

        const reader = new FileReader();
        reader.onload = () => {
          const div = document.createElement('div');
          div.classList.add('preview-item');
          div.innerHTML = `
            <img src="${reader.result}" alt="Uploaded Image">
            <span>&times;</span>
          `;
          preview.appendChild(div);

          div.querySelector('span').addEventListener('click', () => {
            const index = uploadedFiles.indexOf(file);
            if (index > -1) {
              uploadedFiles.splice(index, 1);
            }
            div.remove();
          });
        };
        reader.readAsDataURL(file);
      } else {
        alert('Hanya file gambar yang diizinkan.');
      }
    });
  }

  confirmButton.addEventListener('click', function () {
    const formData = new FormData();

    formData.append('_token', csrfToken);

    const sendProductData = {
      name: productName.value,
      price: productPrice.value,
      fixed_price: productFixedPrice.value,
      discount_type: document.querySelector('[name="discount_type"]:checked')?.value || '',
      discount: productDiscount.value,
      category: productCategory.value,
      brands: productBrands.value,
      availability: productAvailability.value,
      description: productDescription.value,
      stock: productStock.value,
    };

    for (const key in sendProductData) {
      formData.append(key, sendProductData[key]);
    }

    uploadedFiles.forEach((file) => {
      formData.append('media[]', file);
    });

    fetch('/add-product', {
      method: 'POST',
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        console.log('Response dari Laravel:', data);
        if (data.status === 'success') {
          alert('Produk berhasil ditambahkan!');
          window.location.reload();
        } else {
          alert('Terjadi kesalahan: ' + (data.message || 'Tidak diketahui'));
        }
      })
      .catch((error) => {
        console.error('Error:', error);
        alert('Terjadi kesalahan, silakan coba lagi.');
      });
  });

  const categorySelect = document.querySelector('select'); // Ambil elemen <select>

  categorySelect.addEventListener('change', function () {
    const selectedValue = categorySelect.value; // Ambil nilai yang dipilih
    if (selectedValue === '#') { // Periksa apakah nilainya untuk Add Categories
      console.log('ke klik');
      window.location.href = '/add-category';
    }
  });
});

</script>
@endsection