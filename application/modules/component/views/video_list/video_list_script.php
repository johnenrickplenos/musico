<script>
    /*Adding an asset*/
    load_asset("component/video_list.css");
    
    /*Component Object*/
    /***
     * A sample Component
     * @param {type} componentContainer an element selector where the instance of the component is placed
     * @returns {undefined}
     */
    var VideoList = function (componentContainer) {
        var videoList = this;
        videoList.body = $("#pageComponentContainer .videoList").clone();//The HTML instance of the component.
        componentContainer.append(videoList.body);
        
        videoList.addVideoItem = function(userVideoID, userVideoThumbnailLink, videoDescription, uploaderFullName){
            var videoItem = videoList.body.find(".prototype .videoItem").clone();
            videoItem.attr("user_video_id", userVideoID);
            videoItem.find("img").attr("src", userVideoThumbnailLink);
            videoItem.find(".videoDescription").text(videoDescription);
            videoItem.find(".uploadederName").text(uploaderFullName);
            videoList.body.find(".videoList").append(videoItem);
        };
        videoList.empty = function(){
            videoList.body.find(".videoList").empty();
        };
    };
</script>