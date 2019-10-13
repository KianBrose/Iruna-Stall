<!DOCTYPE html>
<html>
    <head>
        <title>Iruna Global Stall</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div>Welcome {{ Auth::user()->name }}</div>
        <a class="logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                @csrf
            </form>

        <form  method="POST" action="/createAi" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputName">Item's name</label>
                    <input type="text" class="form-control" name="name" id="name" required placeholder="name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="InputPrice">Price</label>
                    <input type="number" class="form-control" name="price" id="price" required placeholder="0">
                  </div>
                </div>
                <div class="form-group">
                  <label for="quantity">Quantity</label>
                  <input type="number" class="form-control" id="quantity" name="quantity" required placeholder="1">
                </div>
                <div class="form-group">
                  <label for="contact">Contact</label>
                  <input type="text" class="form-control" id="contact" name="contact" required placeholder="Facebook">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="color">Color</label>
                    <select id="color" name="color" class="form-control">
                      <option selected>Blue</option>
                      <option>Red</option>
                      <option>Green</option>
                    </select>
                  </div>
                <button type="submit" class="btn btn-primary">Add item</button>
              </form>
        @include('sweetalert::alert')
    </body>
</html>