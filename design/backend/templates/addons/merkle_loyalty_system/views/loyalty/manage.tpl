{foreach $items as $value}

    <div class="card" style="width: 500px; height: 150px">
        <div class="card-body" style="text-align:center">
            <h4 class="card-title" >
                {$value.firstname} {$value.lastname} ({$value.points})
                <h4><button style="height: 100%;width:50%;background:white;border:blanchedalmond" onclick="$('#frm{$value.user_id}points').toggle();">
                    Insert Points
                </button></h4>
                <form id="frm{$value.user_id}points" method="POST" action="admin.php?dispatch=loyalty.manage" class="hidden">
                    <input type="hidden" name="user_id" value="{$value.user_id}"/>
                   
                    <input type="number" name="points"/>
                    <input type="submit" value="OK"/> 
                </form>
            </h4>
            <h5 class="card-text" ref="admin.php?dispatch=loyalty.update&id_user={$value.user_id}">
                {if count($value.pontos) > 0 }
                
                    {foreach $value.pontos as $points}
                        {$points.data} - {$points.points}
                        <br>      
                    {/foreach}
                
            {/if}
            </h5>
        </div>
    </div>

{/foreach}