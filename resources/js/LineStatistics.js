import React from 'react';
import ReactDOM from 'react-dom';
import { LineChart, Line, ResponsiveContainer, XAxis, YAxis, CartesianGrid, Tooltip } from 'recharts';

const data = [
    {
      name: "Jan",
      uv: 4000,
      pv: 2400,
      amt: 2400
    },
    {
      name: "Feb",
      uv: 3000,
      pv: 1398,
      amt: 2210
    },
    {
      name: "Mar",
      uv: 2000,
      pv: 9800,
      amt: 2290
    },
    {
      name: "Apr",
      uv: 2780,
      pv: 3908,
      amt: 2000
    },
    {
      name: "May",
      uv: 1890,
      pv: 4800,
      amt: 2181
    },
    {
      name: "June",
      uv: 2390,
      pv: 3800,
      amt: 2500
    },
    {
      name: "July",
      uv: 3490,
      pv: 2300,
      amt: 2100
    },
    {
      name: "Aug",
      uv: 3490,
      pv: 1800,
      amt: 2100
    },
    {
      name: "Sep",
      uv: 3490,
      pv: 1300,
      amt: 2100
    },
    {
      name: "Oct",
      uv: 3490,
      pv: 4100,
      amt: 2100
    },
    {
      name: "Nov",
      uv: 3490,
      pv: 6325,
      amt: 2100
    },
    {
      name: "Dec",
      uv: 3490,
      pv: 1254,
      amt: 2100
    },
    {
      name: "Dec",
      uv: 3490,
      pv: 8521,
      amt: 2100
    },
    {
      name: "Dec",
      uv: 3490,
      pv: 1258,
      amt: 2100
    },
    {
      name: "Dec",
      uv: 3490,
      pv: 5475,
      amt: 2100
    },
    
  ];

export default function App() {
    return (
      <ResponsiveContainer width="100%" height={300}>
        <LineChart data={data}>
          <XAxis dataKey="name" stroke="#8884d8" />
          <YAxis stroke="#8884d8" />
          <Tooltip />
          <Line type="monotone" dataKey="pv" stroke="#8884d8" strokeWidth={4} />
        </LineChart>
      </ResponsiveContainer>
    );
}

document.addEventListener('DOMContentLoaded', function () {
  // Find the element where the React component will be rendered
  const lineContainer = document.querySelector('.line');
  // Render your component inside the container
  ReactDOM.render(<App />, lineContainer);
});
