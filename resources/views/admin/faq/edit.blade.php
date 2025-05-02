@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')

    <body>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <a class="btn btn-primary mb-3" href="{{ url()->previous() }}">Back</a>
                    <form id="add_student" action="{{ route('faq.update', ['id' => $data->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <h4 class="text-center my-4">Update FAQ's</h4>
                                    <div class="row mx-0 px-4">
                                        <div class="col-sm-12 pl-sm-0 pr-sm-3">
                                            <div class="form-group">
                                                <label for="questions">Question <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="questions" name="questions"
                                                    placeholder="Enter the question" value="{{ $data->questions }}"
                                                    required>
                                                <div class="invalid-feedback">Please provide a question.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 pl-sm-0 pr-sm-2">
                                            <div class="form-group mb-3">
                                                <label>Answer</label>
                                                <textarea name="answers" id="answers" class="form-control">{{ $data->answers }}</textarea>
                                            </div>
                                        </div>
                                        <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
                                        <script>
                                            let editor;
                                            ClassicEditor
                                                .create(document.querySelector('#answers'))
                                                .then(newEditor => {
                                                    editor = newEditor;
                                                    editor.setData({!! json_encode($data->answers) !!});
                                                })
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script>
                                    </div>
                                    <div class="card-footer text-center row">
                                        <div class="card-footer text-center row">
                                            <div class="col">
                                                <button type="submit" class="btn btn-success mr-1 btn-bg" id="submit">
                                                    <span class="spinner-border spinner-border-sm d-none" role="status"
                                                        aria-hidden="true"></span>
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </body>
@endsection

@section('js')
    {{-- @if (\Illuminate\Support\Facades\Session::has('message'))
        <script>
            toastr.success('{{ \Illuminate\Support\Facades\Session::get('message') }}');
        </script>
    @endif --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script> --}}

    {{-- <script>
        ClassicEditor
            .create(document.querySelector('#task-textarea'))
            .catch(error => {
                console.error(error);
            });
    </script> --}}
    <script>
        document.getElementById('add_student').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            var form = this; // The form element
            var button = document.getElementById('submit');
            var spinner = button.querySelector('.spinner-border');
            var question = document.getElementById('questions').value.trim();
            var answer = editor.getData().trim(); // Get CKEditor data

            // Disable button and show spinner
            button.disabled = true;
            spinner.classList.remove('d-none');

            if (answer === '') {
                toastr.error('Answer field is required!');

                // Re-enable button and hide spinner after showing the error
                setTimeout(function() {
                    button.disabled = false;
                    spinner.classList.add('d-none');
                }, 1000); // Adjust time to your need, 1000ms = 1 second
            } else {
                // Submit the form using AJAX
                var formData = new FormData(form); // Create FormData from the form

                $.ajax({
                    url: form.action, // Use the form's action for the URL
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                    },
                    success: function(response) {
                        toastr.success('FAQ Updated Successfully!');
                        // Reset the editor
                        editor.setData('');
                        // Hide the modal and reset form
                        $('#editFAQModal').modal('hide');
                        // reloadDataTable();
                        form.reset();
                        // Hide spinner and enable button after success
                        setTimeout(function() {
                            button.disabled = false;
                            spinner.classList.add('d-none');
                        }, 1000);
                        window.location.href = "{{ route('faq.index') }}";
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                toastr.error(value[0]); // Show validation error
                            });
                        } else {
                            toastr.error("An unexpected error occurred. Please try again.");
                        }
                        // Hide spinner and enable button after error
                        setTimeout(function() {
                            button.disabled = false;
                            spinner.classList.add('d-none');
                        }, 1000);
                    }
                });
            }
        });

        function editFAQModal(id) {
            var showFAQ = '{{ route('faq.show', ':id') }}';
            $.ajax({
                url: showFAQ.replace(':id', id),
                type: 'GET',
                success: function(response) {
                    $('#editFAQ .questions').val(response.questions);
                    editor.setData(response.answers);
                    $('#editFAQModal').modal('show');
                    $('#editFAQModal').data('id', id);
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }

        $(document).ready(function() {
            $('#editFAQ input, #editFAQ select, #editFAQ textarea').on('input change', function() {
                $(this).siblings('.invalid-feedback').text('');
                $(this).removeClass('is-invalid');
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editorElements = ['#task-textarea', '#task-textarea1'];

            editorElements.forEach(function(selector) {
                const element = document.querySelector(selector);
                if (element) {
                    ClassicEditor.create(element).catch(error => {
                        console.error(error);
                    });
                }
            });

            document.getElementById('add_student').addEventListener('submit', function() {
                var button = document.getElementById('submit');
                var spinner = button.querySelector('.spinner-border');

                button.disabled = true; // Button disable karein
                spinner.classList.remove('d-none'); // Spinner show karein
            });
        });
    </script>
@endsection
