@if (Auth::check())
                        <script type="text/javascript">
                        jQuery(document).ready(function () {
                        ga('send', 'event', 'Login-{{Auth::id()}}', location.pathname);
                        
                
                }); 
                </script>
                @endif 
