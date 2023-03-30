const stars = document.querySelectorAll('.stars div');

stars.forEach((star, index1) => {
  star.addEventListener('click', () => {
    var rating = $(star).data('rating'); // Get the rating from the selected star
    $('#rating').val(rating); // Set the value of the hidden rating form element
    console.log('news id is' + rating+ '.');
    stars.forEach((star, index2) => {
      index1 >= index2 ? star.classList.add('active') : star.classList.remove('active');
    });
  });



});
