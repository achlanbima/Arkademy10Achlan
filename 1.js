function biodata(){
	data = {
      name : "Achlan Bima Nurachman",
      address : "Cileunyi, Kab. Bandung, Jawa Barat",
      hobbies : ['Playing games', 'Cycling'],
      is_married : false,
      school : { 
        highschool: 'SMK Bakti Nusantara 666'
      },
      skills : [
        { 
          name: 'Javascript', 
          score: 65 
        },
        { 
          name: 'HTML', 
          score: 70
        },
        { 
          name: 'CSS', 
          score: 60 
        },
        { 
          name: 'PHP', 
          score: 63 
        },
        { 
          name: 'MYSQL', 
          score: 65 
        }
      ]
  };
  
  return JSON.stringify(data);
}

console.log(biodata());
