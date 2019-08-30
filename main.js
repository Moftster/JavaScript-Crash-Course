const todos = [
  {

    id: 1,
    text: "take out rubbish",
    isCompleted: true

  },
  {

    id: 2,
    text: "study code",
    isCompleted: false

  },
  {

    id: 3,
    text: "wash dishes",
    isCompleted: true

  }

];


const todoCompleted = todos.filter(function(todo){
  return todo.isCompleted === true;
}).map(function(todo){
  return todo.text;
})

console.log(todoCompleted);
