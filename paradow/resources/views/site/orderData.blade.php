<div class="container">
                    <form id="jvalidate" enctype="multipart/form-data" role="form" class="form-horizontal ml-5 mr-5" action="{{ route('order.add') }}"  method="post" novalidate="novalidate">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        Quantity: <input type="number" class="form-control" id="Quantity" placeholder="Enter Quantity" name="quantity">
                      </div>
                      <div class="form-group">
                        Country: <input type="text" class="form-control" id="country" placeholder="Enter country" name="country">
                      </div>
                      <div class="form-group">
                        address:<input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
                      </div>
                      <div class="form-group">
                        phone:<input type="text" class="form-control" id="phone" placeholder="Enter mobile number" name="phone">
                      </div>
                      
                      <button type="submit" class="btn btn-default">Add to Cart</button>
                    </form>
</div>