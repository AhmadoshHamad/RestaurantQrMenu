import React, { useState, useEffect, useRef } from 'react';
import ReactDOM from 'react-dom/client'
import { Layer, Stage, Group, Rect, Transformer } from 'react-konva';

const initialRectangles = [
  {
    x: 0,
    y: 0,
    width: 100,
    height: 100,
    fill: '#2199ed',
    id: 'rect1',
    title: 'Table 1',
  },
];

const Rectangle = ({ shapeProps, isSelected, onSelect, onChange }) => {
  const dynamicWidth = Math.max(document.querySelector('.stage-wrapper')?.offsetWidth || 250, 250);

  const shapeRef = useRef();
  const trRef = useRef();

  useEffect(() => {
    if (isSelected) {
      trRef.current.nodes([shapeRef.current]);
      trRef.current.getLayer().batchDraw();
    }
  }, [isSelected]);

  const handleDragMove = (e) => {
    const newX = e.target.x();
    const newY = e.target.y();
    onChange({
      ...shapeProps,
      x: newX,
      y: newY,
    });
  };

  return (
    <Group>
      <Rect
        cornerRadius={15}
        strokeWidth={1}
        stroke="gray"
        dash={[5, 5]}
        onClick={onSelect}
        onTap={onSelect}
        ref={shapeRef}
        {...shapeProps}
        draggable
        onDragMove={handleDragMove}
        dragBoundFunc={(pos) => {
          const { x, y } = pos;
          const { width, height } = shapeProps;
          const minX = 0;
          const minY = 0;
          const maxX = dynamicWidth - width; // Use dynamicWidth here
          const maxY = 600 - height; // Assuming fixed height for now
        
          // Ensure that the rectangle does not go beyond the right boundary
          const constrainedX = Math.max(minX, Math.min(x, maxX));
          const constrainedY = Math.max(minY, Math.min(y, maxY));
        
          return { x: constrainedX, y: constrainedY };
        }}
        
        onTransformEnd={(e) => {
          const node = shapeRef.current;
          const scaleX = node.scaleX();
          const scaleY = node.scaleY();
          node.scaleX(1);
          node.scaleY(1);
          onChange({
            ...shapeProps,
            x: node.x(),
            y: node.y(),
            width: Math.max(5, node.width() * scaleX),
            height: Math.max(node.height() * scaleY),
          });
        }}
        sceneFunc={(context, shape) => {
          context.beginPath();
          context.rect(0, 0, shapeProps.width, shapeProps.height);
          context.fillStyle = shapeProps.fill;
          context.fillStrokeShape(shape);

          context.font = 'bold 20px Arial';
          context.fillStyle = 'black';
          const textWidth = context.measureText(shapeProps.title).width;
          const textHeight = 12;
          const textX = (shapeProps.width - textWidth) / 2;
          const textY = (shapeProps.height + textHeight) / 2;
          context.fillText(shapeProps.title, textX, textY);
        }}
      />
      {isSelected && (
        <Transformer
          ref={trRef}
          flipEnabled={false}
          boundBoxFunc={(oldBox, newBox) => {
            if (Math.abs(newBox.width) < 5 || Math.abs(newBox.height) < 5) {
              return oldBox;
            }
            return newBox;
          }}
        />
      )}
    </Group>
  );
};

const App = () => {
  const [rectangles, setRectangles] = useState(initialRectangles);
  const [selectedId, selectShape] = useState(initialRectangles[0].id);
  const [idCounter, setIdCounter] = useState(2);

  const deleteShape = (id) => {
    const updatedRectangles = rectangles.filter(rect => rect.id !== id);
    setRectangles(updatedRectangles);
    if (selectedId === id) {
      selectShape(null);
    }
  };

  const checkDeselect = (e) => {
    const clickedOnEmpty = e.target === e.target.getStage();
    if (clickedOnEmpty) {
      selectShape(null);
    }
  };

  const addShape = () => {
    const newRect = {
      x: 50,
      y: 50,
      width: 100,
      height: 100,
      fill: '#2199ed',
      id: 'rect' + idCounter,
      title: 'Table ' + (idCounter),
    };
    setIdCounter(idCounter + 1);
    setRectangles([...rectangles, newRect]);
  };
  const dynamicWidth = document.querySelector('.stage-wrapper')?.offsetWidth || 100; // Default width is set to 100 if element is not found

  useEffect(() => {
    const handleKeyDown = (event) => {
      if ((event.key === 'Delete' || event.key === 'Backspace') && selectedId !== null) {
        deleteShape(selectedId);
      }
    };

    document.addEventListener('keydown', handleKeyDown);

    return () => {
      document.removeEventListener('keydown', handleKeyDown);
    };
  }, [selectedId]); // Add selectedId as dependency

  return (
    <div className='bg-red'>
      <div className="card-header p-0 border-0 pt-4 py-1 bg-white">  
        <div className="row d-flex pb-3 justify-content-center"> 
          <div className="col-sm-4 col-12"><h5 className="text-start ms-2">Floor plan </h5></div> 
          <div className="col-sm-8 col-12">
            <div className="d-flex align-items-center justify-content-end column-gap-2 me-2">
              <button onClick={addShape} id="button" className="btn btn-primary"> Add new table</button>
              <a href="/users/tables/areas" className="btn btn-success d-flex align-items-center">
                <span className="text-white material-symbols-outlined">check_small</span> Save
              </a>
            </div>
          </div>  
        </div>   
      </div> 
      <div className="card-body p-0"> 
        <div className="stage-wrapper" style={{ border: '2px dashed gray', borderRadius: '10px', width: '100%', height: '100%', backgroundColor: '#dee3e6' }}>
          <Stage width={dynamicWidth} height={600} onMouseDown={checkDeselect} onTouchStart={checkDeselect}>
            <Layer>
              {rectangles.map((rect, i) => (
                <Rectangle
                  key={i}
                  shapeProps={rect}
                  isSelected={rect.id === selectedId}
                  onSelect={() => {
                    selectShape(rect.id);
                  }}
                  onChange={(newAttrs) => {
                    const rects = rectangles.slice();
                    rects[i] = newAttrs;
                    setRectangles(rects);
                  }}
                />
              ))}
            </Layer>
          </Stage>
        </div>
      </div>
    </div>
  );
};

document.addEventListener('DOMContentLoaded', function () {
  const QR = document.querySelectorAll('.floor');

  QR.forEach((element) => {
    const root = ReactDOM.createRoot(element);

    // Render your component inside each root instance with the retrieved label
    root.render(<App />);
  });
});
