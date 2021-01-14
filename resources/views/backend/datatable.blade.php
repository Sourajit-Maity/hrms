<script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
            $('.datatable').dataTable({
                "paging": false,
                "ordering": false,
                "bInfo" : false
            });

            $( "table tbody" ).sortable({
                stop: function( event, ui ) {
                    var arr=[];
                    $('tbody tr').each(function () {
                        arr.push($(this).data('order'));
                    });
                    $.ajax({
                        type: "POST",
                        url: '{{url('view-user')}}',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'order':arr
                        },
                        dataType: "json",
                        success: function (data) {

                        }
                    });
                }
            });
        });

	</script>