const ajaxPost = (url, data, callbackFunction) => jQuery.ajax({
    url : url,
    type: "POST",
    data : data,
    dataType : "json",
    success: function(response) {
        callbackFunction(response)
    },
    error: function(xhr, status, error) {
        console.log("Error:", error);
    }
})