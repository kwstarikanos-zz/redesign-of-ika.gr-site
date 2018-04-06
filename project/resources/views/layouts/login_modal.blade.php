@section('login_modal')
    <!-- Login Modal -->
    <div class="modal fade" id="login_modal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Συνδεθείτε για να συνεχίσετε...</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="well">
                        @include('auth.login')
                    </div>
                </div>
                <div class="modal-footer">
                    <p>
                        Σε περίπτωση που δεν έχετε λογαριασμό, μεταβείτε σε οποιοδηποτε
                        <a href="{{route('stores')}}">υποκατάστημα</a> του Ι.Κ.Α. ώστε να παραλάβετε κλειδάριθμο.
                    </p>
                    Στη συνέχεια πραγματοποιήστε <button id="login-form-reg-btn" type="button" class="btn btn-link">εγγραφή</button>.
                </div>
            </div>
        </div>
    </div>
