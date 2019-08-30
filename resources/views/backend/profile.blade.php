@extends('backend.layouts.master')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Profile Page</h1>
<div class="row">
    <div class="col-sm-3">
        <!--left col-->
        <div class="text-center">
            <img src="" class="avatar img-circle img-thumbnail" alt="avatar">
        </div>
    </div>
    <!--/col-3-->
    <div class="col-sm-9">
        <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                <form class="form" action="##" method="post">
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="first_name">
                                <h4>Name</h4>
                            </label>
                            <input type="text" class="form-control name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="email">
                                <h4>Email</h4>
                            </label>
                            <input type="text" class="form-control email" name="email" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="phone">
                                <h4>Phone</h4>
                            </label>
                            <input type="text" class="form-control phone" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <br>
                            <button class="btn btn-lg btn-success save-profile" type="button"><i
                                    class="glyphicon glyphicon-ok-sign"></i> Save</button>
                        </div>
                    </div>
                </form>

                <hr>

            </div>
        </div>
        <!--/tab-pane-->
    </div>
    <!--/tab-content-->

</div>
<!--/col-9-->
@endsection

@section('javascript')
<script src="{{ asset('assets/backend/profile.js') }}"></script>
<script>
    $(document).profile({
        'urlShow'   : '{{ route('profile.show', ['id' => Auth::user()->id]) }}',
        'urlUpdate' : '{{ route('profile.update', ['id' => Auth::user()->id]) }}',
    });
</script>
@endsection