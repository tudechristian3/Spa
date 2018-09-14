@extends('main')

@section('title', '| Contact')

@section('content')
        <div class="">
            <div class="col-md-12">
                <h3>Contact Me</h3>
                <hr>
                <form>
                    <div class="form-group">
                        <label>Email: </label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Subject: </label>
                        <input type="text" name="subject" id="subject" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Message: </label>
                        <textarea name="message" id="message" class="form-control">Your Message Here</textarea>
                    </div>
                    <input type="submit" class="btn btn-success" value="Send Message">
                </form>
            </div>
        </div>
@endsection        