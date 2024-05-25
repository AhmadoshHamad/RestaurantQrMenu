import React from "react";
import ReactDOM from "react-dom/client"
import {
  BarChart,
  Bar,
  XAxis,
  YAxis,
  CartesianGrid,
  Tooltip,
  Legend
} from "recharts";

const data = [
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
    pv: 3300,
    amt: 2100
  },
  {
    name: "Dec",
    uv: 3490,
    pv: 2300,
    amt: 2100
  },
];

export default function App({width}) {
  return (
    <BarChart
      width={width}
      height={300}
      data={data}
      innerRadius={100}
      margin={{
        top: 5,
        right: 30,
        left: 20,
        bottom: 5
      }}
    >
      <XAxis dataKey="name" />
      <YAxis />
      <Tooltip />
      <Legend />
      <Bar dataKey="pv" fill="#FFA500" barSize={10} radius={[30, 30, 30, 30]}/>
    </BarChart>
  );
}

document.addEventListener('DOMContentLoaded', function() {
    // Find all elements with the 'color-picker' class
    const barPickerElements = document.querySelectorAll('.bar');
  
    // Create a root instance for each color picker element
    barPickerElements.forEach((element) => {
      const widthSt = element.getAttribute('data-label');
      console.log(typeof(widthSt))
      var width = parseInt(widthSt)
      const root = ReactDOM.createRoot(element);
  
      // Render your component inside each root instance
      root.render(<App width = {width}/>);
    });
  });