<div id="accordion">
                    @if(!empty($optionses))
                    @forelse($optionses as $u)
                    <div class="card border-0">
                    <div class="card-header faqpadding">
                    <i class="fa fa-quora faqicon" aria-hidden="true"></i>
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapsefive{{$u->id}}">
                    @if(!empty($u->questions)){{$u->questions}}@endif
                    </a>
                    </div>
                    <div id="collapsefive{{$u->id}}" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    @if(!empty($u->questions) && !empty($u->answer)){{$u->answer}}@endif
                    </div>
                    </div>
                    </div>
                    @empty
                    No Record Found!!!
                    @endforelse
                    @endif

</div>
									   @if(!empty($optionses))
                                    {!! $optionses->render() !!}
                                     @endif