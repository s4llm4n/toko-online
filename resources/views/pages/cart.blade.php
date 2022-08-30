@extends('layouts.app')

@section('title')
    Card Category Page
@endsection

@section('content')
<!-- Page Content -->
    <div class="page-content page-cart">
        <section
          class="store-breadcrumbs"
          data-aos="fade-down"
          data-aos-delay="100"
        >
          <div class="container">
            <div class="row">
              <div class="col-12">
                <nav>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="/index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Cart</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
  
        <section class="store-cart">
          <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-12 table-responsive">
                <table class="table table-borderless table-cart">
                  <thead>
                    <tr>
                      <td>Image</td>
                      <td>Name &amp; Seller</td>
                      <td>Price</td>
                      <td>Menu</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="width: 20%">
                        <img
                          src="/images/product-cart-1.jpg"
                          alt=""
                          class="cart-image"
                        />
                      </td>
                      <td style="width: 35%">
                        <div class="product-title">Sofa Ternyaman</div>
                        <div class="product-subtitle">by Andi Sukka</div>
                      </td>
                      <td>
                        <div class="product-title">$29,112</div>
                        <div class="product-subtitle">USD</div>
                      </td>
                      <td style="width: 25%">
                        <a href="#" class="btn btn-remove-cart"> Remove </a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 20%">
                        <img
                          src="/images/product-cart-2.jpg"
                          alt=""
                          class="cart-image"
                        />
                      </td>
                      <td style="width: 35%">
                        <div class="product-title">Sneaker</div>
                        <div class="product-subtitle">by BWA</div>
                      </td>
                      <td>
                        <div class="product-title">$49,112</div>
                        <div class="product-subtitle">USD</div>
                      </td>
                      <td style="width: 25%">
                        <a href="#" class="btn btn-remove-cart"> Remove </a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 20%">
                        <img
                          src="/images/product-cart-3.jpg"
                          alt=""
                          class="cart-image"
                        />
                      </td>
                      <td style="width: 35%">
                        <div class="product-title">Coffe Holder</div>
                        <div class="product-subtitle">by Addictex</div>
                      </td>
                      <td>
                        <div class="product-title">$13,412</div>
                        <div class="product-subtitle">USD</div>
                      </td>
                      <td style="width: 25%">
                        <a href="#" class="btn btn-remove-cart"> Remove </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="150">
              <div class="col-12">
                <hr />
              </div>
              <div class="col-12">
                <h2 class="mb-4">Shipping Details</h2>
              </div>
            </div>
            <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="addressOne">Address 1</label>
                  <input
                    type="text"
                    class="form-control"
                    id="addressOne"
                    name="addressOne"
                    value="Setra Duta Cemara"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="addressTwo">Address 2</label>
                  <input
                    type="text"
                    class="form-control"
                    id="addressOne"
                    name="addressOne"
                    value="Blok B2 No. 34"
                  />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="province">Province</label>
                  <select name="province" id="province" class="form-control">
                    <option value="West Java">West Java</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="city">City</label>
                  <select name="city" id="city" class="form-control">
                    <option value="Bandung">Bandung</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="postalcode">Postal Code</label>
                  <input
                    type="text"
                    class="form-control"
                    id="postalcode"
                    name="postalcode"
                    value="40521"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="country">Country</label>
                  <input
                    type="text"
                    class="form-control"
                    id="country"
                    name="country"
                    value="Indonesia"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="mobile">Mobile</label>
                  <input
                    type="text"
                    class="form-control"
                    id="mobile"
                    name="mobile"
                    value="08564771245"
                  />
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="150">
              <div class="col-12">
                <hr />
              </div>
              <div class="col-12">
                <h2 class="mb-2">Payment Informations</h2>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="200">
              <div class="col-4 col-md-2">
                <div class="product-title">$10</div>
                <div class="product-subtitile">Country Tax</div>
              </div>
              <div class="col-4 col-md-3">
                <div class="product-title">$280</div>
                <div class="product-subtitile">Product Insurance</div>
              </div>
              <div class="col-4 col-md-2">
                <div class="product-title">$580</div>
                <div class="product-subtitile">Ship To Jakarta</div>
              </div>
              <div class="col-4 col-md-2">
                <div class="product-title text-success">$392,409</div>
                <div class="product-subtitile">Total</div>
              </div>
              <div class="col-8 col-md-3">
                <a
                  href="/success.html"
                  class="btn btn-success mt-4 px-4 btn-block"
                >
                Checkout Now</a
                >
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection