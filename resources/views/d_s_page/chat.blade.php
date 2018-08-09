<div class="page-breadcrumb">
   <div class="row">
       <div class="col-12 d-flex no-block align-items-center">
           <h2 class="page-title">Chat Room</h2>

       </div>
   </div>
</div>

<div class="container-fluid">

  <div class="row">
                    <div class="col-md-4">
                         <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Seekers</h4>
                            </div>
                            <div class="todo-widget scrollable ps-container ps-theme-default ps-active-y" style="height:450px;" data-ps-id="b80579a4-2ea0-19c3-f193-73d7a30d33c4">
                            <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="fc199411-373f-37e8-6a30-10c3a3be2945">
                                <!-- Comment Row -->

                                @if(count($reciever)>0)
                                    @foreach($reciever->all() as $reciever)
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="{{Storage::url($reciever->img)}}" alt="user" width="50" class="rounded-circle"></div>
                                    <div onclick="load_chat('{{$reciever->request_ID}}');" class="comment-text w-100" >
                                        <h4  class="font-medium">{{$reciever->name}}</h4>
                                        <span class="m-b-15 d-block">{{str_limit($reciever->note, $limit = 50, $end = '......')}}</span>
                                    </div>
                                </div>
                                    @endforeach
                                @endif



                            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                        <!-- card new -->
                        <div id="load_chat">
                        
                        </div>
                    </div>
                </div>
