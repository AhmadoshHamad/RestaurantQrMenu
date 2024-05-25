import React from 'react';
import { SketchPicker } from 'react-color';
import ReactDOM from 'react-dom';

class ColorPicker extends React.Component {
  state = {
    background: '#fff',
  };

  handleChange = (color) => {
    this.setState({ background: color.hex });
  };

  render() {
    return (
      <div>
        <input
          className="form-control"
          type="text"
          value={this.state.background}
          onChange={(e) => this.setState({ background: e.target.value })}
        />
        <SketchPicker
          color={this.state.background}
          onChange={this.handleChange} // Use onChange for real-time updates
        />
      </div>
    );
  }
}

// Ensure the DOM is fully loaded before rendering the React component
document.addEventListener('DOMContentLoaded', function() {
  // Find all elements with the 'color-picker' class
  const colorPickerElements = document.querySelectorAll('.colors');

  // Create a root instance for each color picker element
  colorPickerElements.forEach((element) => {
    const root = ReactDOM.createRoot(element);

    // Render your component inside each root instance
    root.render(<ColorPicker />);
  });
});