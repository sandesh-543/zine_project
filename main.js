$gh="<input type='text' placeholder='Enter a comment...' class='bdescription'> <button type='button' class='addbtn'>Add comment</button>;
(".comment-box").on("click",function(){
    $(this).append($gh);
});
