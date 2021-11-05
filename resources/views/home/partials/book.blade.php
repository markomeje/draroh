<div class="modal fade" id="download-book" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" style="border-radius: 15px;" role="document">
        <div class="modal-content rounded-0 border-0">
            <form method="post" action="javascript:;" class="download-book-form" data-action="{{ route('download.book') }}" autocomplete="off">
                @csrf
                <div class="modal-body m-0 p-0">
                    <div class="position-relative">
                        <div class="cursor-pointer position-absolute bg-danger text-white rounded-circle px-2 py-1" data-dismiss="modal" aria-label="Close" style="top: -15px; right: -15px;">
                            <i class="icofont-close"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="mb-3 alert alert-info">Please enter your email and download the book immediately.</div>
                       <div class="form-group input-group-lg">
                            <label class="text-darkly">Your Email</label>
                            <input type="email" class="form-control email" name="email" placeholder="e.g., email@email.com">
                            <small class="invalid-feedback email-error"></small>
                        </div>
                        <div class="alert mb-3 download-book-message d-none"></div>
                        <div class="d-flex justify-content-right mb-3 mt-1">
                            <button type="submit" class="btn rounded-0 bg-green text-white download-book-button btn-block btn-lg px-4 font-weight-bold">
                                <img src="/images/spinner.svg" class="mr-2 d-none download-book-spinner mb-1">
                                Download
                            </button>
                        </div> 
                    </div>  
                </div>
            </form>
        </div>
    </div>
</div>