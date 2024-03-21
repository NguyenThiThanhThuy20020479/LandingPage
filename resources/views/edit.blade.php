<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.3/dist/bootstrap-table.min.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.22.3/dist/bootstrap-table.min.js"></script>
<body>
<div style="margin: 30px;">
  <h2>Update contact</h2>
  <button class="btn btn-success"><a style="text-decoration: none; color: white" href="{{route('list')}}">Back</a></button>
  <div class="row">
    <!-- Start Col -->
    <div class="col-lg-6 col-md-12">
    <form id="contactForm" method="post" action="{{route('update', ['id'=>$contact->id])}}">
        @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="form-group"><span>First name</span> 
            <input value = "{{$contact->first_name}}"type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" required data-error="Please enter your first name">
            <div class="help-block with-errors"></div>
          </div>                                 
        </div>
        <div class="col-md-6">
          <div class="form-group"><span>Last name</span> 
            <input  value = "{{$contact->last_name}}"type="text" placeholder="Last name" id="last_name" class="form-control" name="last_name" required data-error="Please enter your last name">
            <div class="help-block with-errors"></div>
          </div> 
        </div>
        <div class="col-md-6">
          <div class="form-group"><span>Email</span> 
            <input  value = "{{$contact->email}}"type="text" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your Email">
            <div class="help-block with-errors"></div>
          </div>                                 
        </div>
        <div class="col-md-6">
          <div class="form-group"><span>Phone</span> 
            <input  value = "{{$contact->phone_number}}" type="text" placeholder="Phone number" id="phone_number" class="form-control" name="phone_number"
            pattern="[0]{1}[8-9]{1}[0-9]{8}"
            required data-error="Please enter your phone number">
            <div class="help-block with-errors"></div>
          </div> 
        </div>
        <div class="col-md-12">
          <div class="form-group"> <span>Address</span> 
            <input  value = "{{$contact->address}}" type="text" placeholder="Address" id="address" class="form-control" name="address" required data-error="Please enter your address">
            <div class="help-block with-errors"></div>
          </div>
          <div class="submit-button" style="text-align: center; margin-top:10px">
            <button class="btn btn-success" id="submit" type="submit">Update</button>
            <div id="msgSubmit" class="h3 hidden"></div> 
            <div class="clearfix"></div> 
          </div>
        </div>
      </div>            
    </form>
  </div>
</div>
</body>
</html>