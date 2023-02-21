require('./bootstrap');

$('.link-target').click(function(e){

    let linkID = $(this).data('link-id');
    let linkUrl = $(this).attr('href');

    axios.post('/visit/' + linkID, {
        link: linkUrl 
      })
      .then(function (response) {
        console.log('response: '+ response);
      })
      .catch(function (error) {
        console.log('error: '+ error);
      });
});