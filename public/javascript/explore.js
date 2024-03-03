var paginate = 1;
var dataExplore = [];
loadMoreData(paginate);
$(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() >= $(document).height()) {
        paginate++;
        loadMoreData(paginate);
    }
})

function loadMoreData(paginate){
    $.ajax({
        url:window.location.origin +'/getDataExplore/' + '?page='+paginate,
        type: "GET",
        datatype: "JSON",
        succes: function(e){
            console.log(e)
            e.data.data.map((x)=>{
                let datanya = {
                    id: x.id,
                    judul: x.judul_foto,
                    deskripsi: x.deskripsi_foto,
                    foto: x.lokasi_foto,
                    tanggal: x.created_at,
                    jml_comment: x.comment_count,
                    jml_like: x.like_count,
                }
                dataExplore.push(datanya)
            })
            getExplore()
        },
        error: function(jqXHR, textStatus, errorThrown){

        }
    })
}

const getExplore =()=>{
    $('#exploredata').html('')
    dataExplore.map((x, i)=>{
        $('#exploredata').append(
            `
            <div class="lg:w-1/2 mx-auto">
            <div class="flex flex-col">
                <div class="w-[363px] h-[192px] bg-slate-500 overflow-hidden">
                    <img src="/assets/${x.foto}" alt="">
                </div>
                <div>
                    <div class="flex items-center justify-between lg:mr-6">
                        <div>
                            <div class="flex flex-col">
                                <div>
                                    ${x.judul_foto}
                                </div>
                                <div>
                                    <span class="text-xs text-gray-500">1h</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex gap-3">
                                <div>
                                    <ion-icon name="pricetag-outline" class="text-2xl"></ion-icon>
                                </div>
                                <div>
                                    <ion-icon name="chatbubble-outline" class="text-2xl">${x.jml_comment}</ion-icon>
                                </div>
                                <div>
                                    <ion-icon name="heart-outline" class="text-2xl" onclick="likes(this, ${x.id})">${x.jml_like}</ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`
        )
    })
}


function likes (txt, id) {
    $.ajax({
        url: window.location.origin +'/likefotos',
        dataType: "JSON",
        type: "POST",
        data: {
            _token: $('input[name="_token"]').val(),
            idfoto: id,
            },
            success: function(res) {
                console.log(res)
            },
            error: function(jqXHR, textStatus, errorThrown){
                alert('gagal')
        }
    })
}
