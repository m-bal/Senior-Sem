var data = [
  {
    x: ['Career 1', 'Career 2', 'Career 3'],
    y: [5, 18, 20],
    type: 'bar'
  }
];

Plotly.newPlot('barGraph', data);

var skill1 = {
  x: [1, 2, 3, 4],
  y: [10, 15, 13, 17],
  mode: 'markers',
  type: 'scatter',
  name: 'Skill 1'
};

var skill2 = {
  x: [2, 3, 4, 5],
  y: [16, 5, 11, 9],
  mode: 'lines',
  type: 'scatter',
  name: 'Skill 2'
};

var skill3 = {
  x: [1, 2, 3, 4],
  y: [12, 9, 15, 12],
  mode: 'lines+markers',
  type: 'scatter',
  name: 'Skill 3'
};

var data = [skill1, skill2, skill3];

Plotly.newPlot('lineGraph', data);
