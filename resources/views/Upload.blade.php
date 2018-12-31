@extends('layouts.app')


@section('content')
    <style>
        .invalid-feedback{
            display: block;
        }
    </style>
<div class="container">
    <div class="row">
        <div class="offset-2 col-md-8">

            <form action="{{route('biodata.save')}}" method="POST">
                {{csrf_field()}}
                <label for="">Name</label>
                <div class="form-row">

                    <div class="form-group col-md-4">

                        <input type="text" class="form-control  {{$errors->has('first_name') ? 'has-error' : '' }}" placeholder="First Name" name="first_name">
                        @if ($errors->has('first_name'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control"  placeholder="Middle Name" name="middle_name">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control  {{$errors->has('last_name') ? 'has-error' : '' }}"  placeholder="Last Name" name="last_name">
                        @if ($errors->has('last_name'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <label for="">Highest Degree</label>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <select name="highest_degree" class="form-control">
                            <option value="Masters">Masters</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="+2">+2</option>
                            <option value="SLC">SLC</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="date" class="form-control"  placeholder="Date" name="completed_date">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Organization" name="organization">
                    </div>
                </div>
                <label for="">Contact</label>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Address" name="address">
                        @if ($errors->has('address'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control"  placeholder="Phone No." name="phone">
                        @if ($errors->has('phone'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Email" name="email">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <label for="">Skills</label>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="php" name="skills">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control"  placeholder="Rating" name="rating">
                    </div>
                </div>
                <label for="">Areas of interest</label>
                <div class="form-row">
                  <div class="form-group col-md-6">
                      <select name="interest[]" id="interest"  multiple="multiple" style="display: none;">
                          <option value="web designing">Web Designing</option>
                          <option value="php">Php</option>
                          <option value="python">Python</option>
                      </select>
                  </div>
                </div>
                <label for="">Account</label>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="github" placeholder="Github Account">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="linkedIn" placeholder="LinkedIn Account">
                    </div>
                </div>
                <label for="">Experience/Internship</label>
                <div class="form-row">
                    <div class="form-group col-md-12">
                            <textarea  id="" cols="30" rows="10"  class="form-control" name="experience" placeholder="Experience"></textarea>
                    </div>

                </div>

                <label for="">Awards/Scholarship</label>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Title" name="awards_title">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="date" class="form-control"  placeholder="Date" name="awards_year">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Organization" name="awards_organization">
                    </div>
                </div>
                <label for="">References</label>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Name" name="reference_name">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control"  placeholder="Contact" name="reference_contact">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="Associated To" name="reference_associated">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </div>
</div>

@endsection