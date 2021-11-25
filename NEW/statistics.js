
           const filtersModal = document.querySelector(".filters-form-wrapper");
           const filtersBtn = document.querySelector(".filters-btn");
           const filtersX = document.querySelector(".filters-x");
           const formContainer = document.querySelector(".form-container");

           filtersBtn.addEventListener('click', () => {
               filtersModal.classList.add("display");
               formContainer.classList.add('disable');
           });
           filtersX.addEventListener('click', () => {
               filtersModal.classList.remove("display");
               formContainer.classList.remove('disable');
           });