@extends('Ad_back.includeexternal.master')
@section('formcontent')
    <div class="title-heading">Company </div>
    @if(count($companydata)== 0)
        <br><center>{{ "No Entry" }}</center>
        @else
   <form method="post" action="{{ route('company.update') }}" enctype="multipart/form-data">
       {!! csrf_field() !!}
       <input type="hidden" name="Company_Id" value="{{ $companydata->id }}"/>

    <div class="form-row">
    <label for="fname">Company</label>
    <input type="text" class="form-pattern" id="C_Name" name="C_Name" value="{{ $companydata->C_Name }}" placeholder="Your company name..">
     </div>
    <div class="clearnext"></div>
    <div class="form-row">
    <label for="lname">Description</label>
        <textarea class="form-pattern" id="Description" name="Description" placeholder="Your last name..">{{ $companydata->Description }}</textarea>
        <div class="clearnext"></div>
    </div>
       <div class="form-row">
           <label for="lname">Address</label>
           <textarea class="form-pattern" id="Address" name="Address" placeholder="Your last name..">{{ $companydata->Address }}</textarea>
           <div class="clearnext"></div>
       </div>
       <div class="form-row">
           <label for="fname">Email</label>
           <input type="text" class="form-pattern" id="Email" name="Email" value="{{ $companydata->Email }}" placeholder="Your company name..">
       </div>
       <div class="form-row">
           <label for="fname">Phone No</label>
           <input type="text" class="form-pattern" id="Phone_No" name="Phone_No" value="{{ $companydata->Phone_No }}" placeholder="Your company name..">
       </div>
       <div class="form-row">
           <label for="fname">Facebook Link</label>
           <input type="text" class="form-pattern" id="Fb_Link" name="Fb_Link" value="{{ $companydata->Fb_Link }}" placeholder="Your company name..">
       </div>
       <div class="form-row">
           <label for="fname">LinkedIn</label>
           <input type="text" class="form-pattern" id="LinkedIn" name="LinkedIn" value="{{ $companydata->LinkedIn }}" placeholder="Your company name..">
       </div>
       <div class="form-row">
           <label for="fname">Contact Us - Email</label>
           <input type="text" class="form-pattern" id="Contact_Us_Email" name="Contact_Us_Email" value="{{ $companydata->Contact_Us_Email }}" placeholder="Your company name..">
       </div>
       <div class="form-row">
           <label for="fname">Phone No</label>
           <input type="text" class="form-pattern" id="Contact_Phone_No" name="Contact_Phone_No" value="{{ $companydata->Contact_Phone_No }}" placeholder="Your company name..">
       </div>
       <div class="form-row">
           <label for="fname">Logo</label>
           <input type="file" class="form-pattern" id="Logo" name="Logo">
           @if(session()->has('error'))

               <span class="error-div-span">
        {{ session()->get('error') }}

    </span>
           @endif

       </div>

    <div class="form-row">
    <label for="country">Size</label>
    <select class="form-pattern" id="Size" name="Size">
        <option value="S" @if($companydata->Size == 'S')  {{ "selected" }} @endif>Small</option>
        <option value="M" @if($companydata->Size == 'M')  {{ "selected" }} @endif>Medium</option>
        <option value="L" @if($companydata->Size == 'L')  {{ "selected" }} @endif>Large</option>
        <div class="XL" @if($companydata->Size == 'XL')  {{ "selected" }} @endif>XLarge</div>
    </select>
    </div>
       <div class="form-row">
           <label for="fname">Modified By</label>
           <input type="text" class="form-pattern" id="Modified_By" name="Modified_By" value="{{ $companydata->Modified_By }}" placeholder="Your company name..">
       </div>
   <div class="button-align">
       <input type="submit" class="form-submitbutton" value="Submit">
       <div class="spacedivider"></div>
       <a href="companylist"><input type="button" class="form-backbutton" value="Back"></a></div>


</form>
    @endif
@endsection
@push('uppercontent')
    <link href="{{ asset('css/ad_backcss/globalcss.css') }}" rel="stylesheet"/>

  @endpush
@push('lowercontent')
    <script src="{{ asset('js/ad_backjs/globaljs.js') }}"></script>
  @endpush