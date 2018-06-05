@extends('Ad_back.includeexternal.master')
@section('formcontent')
    <div class="title-heading">Company</div>
<form>
    <div class="form-row">
    <label for="fname">First Name</label>
    <input type="text" class="form-pattern" id="fname" name="firstname" placeholder="Your name..">
     </div>
    <div class="clearnext"></div>
    <div class="form-row">
    <label for="lname">Last Name</label>
    <input type="text" class="form-pattern" id="lname" name="lastname" placeholder="Your last name..">
        <div class="clearnext"></div>
    </div>
    <div class="form-row">
    <label for="country">Country</label>
    <select class="form-pattern" id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
        <div class="clearnext"></div>
    </select>
    </div>
   <div class="button-align">
       <input type="submit" class="form-submitbutton" value="Submit">
       <div class="spacedivider"></div>
       <input type="button" class="form-backbutton" value="Back"></div>

</form>
    @endsection
@push('uppercontent')
    <link href="{{ asset('css/ad_backcss/globalcss.css') }}" rel="stylesheet"/>
  @endpush
@push('lowercontent')
    <script src="{{ asset('js/ad_backjs/globaljs.js') }}"></script>
  @endpush