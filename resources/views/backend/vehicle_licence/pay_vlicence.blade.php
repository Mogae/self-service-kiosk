@extends ('layout.master1')

@section ('content')
<style type="text/css">
	input[type=text] {
  background-color: #3CBC8D;
  color: white;
  border: 4px solid black;
  border-radius: 4px;
  width: 80%;
  padding: 14px 18px;

}
form {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>


<div class="text-center">
                    <h2 class="page-section-heading text-secondary mb-0 d-inline-block">PAY FOR VEHICLE LICENCE RENEWAL</h2>
                </div>

                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><p>ENTER REGISTRATION NUMBER AND OWNER ID</p></div>
                    <div class="divider-custom-line"></div>
                </div>
<strong><ul><li>Enter the ID number of a registerd owner</li>
            <li> For Vehcicles owned by Companies, Check the ID assigned to the Company on the Registration Book </li></ul></strong>
<div align='center'>
 <form   action="{{route('driver.check')}}" method="post">
        {{csrf_field()}}
       
        <div class="control-group">
            <div class="controls">
                     <br/>
                <div class="pure-input-rounded">
                    <span class="add-on bg_lg"><h3 class="page-section-heading text-secondary mb-0 d-inline-block">VEHICLE REGISTRATION NUMBER</h3></span><br/>
                    <input type="text" name="id" size="80px" placeholder="Enter vehicle registration number........."/>
                </div>
                <span class="error">
                    @if($errors->has('id'))
                        {{$errors->first('id')}}
                    @endif
                </span>
            </div>
        </div>
        <br/>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="page-section-heading text-secondary mb-0 d-inline-block"><h3>OWNER ID</h3></span><br/>
                    <input type="text" name="ID" size="80px" placeholder="Enter owner ID............"/>
                </div>
                <span class="error">
                    @if($errors->has('surname'))
                        {{$errors->first('surname')}}
                    @endif
                </span>
            </div>
        </div>
        <div class="form-actions">
          <br/>
            <span class=class="page-section-heading text-secondary mb-0 d-inline-block" ><button type="submit" class="btn btn-primary">    &nbsp;&nbsp;PROCEED->> &nbsp;&nbsp;    </button></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
        <a button  class="btn btn-primary" href="{{route('home')}}" ><i class="fas fa-times fa-fw"></i> EXIT </button></a> </div>
    </form></div>



<div align='center'></div>
<br/><br/><br/><br/>
@endsection