// CardsStyle.js
import React from 'react';
import { Draggable } from 'react-beautiful-dnd';

const CardsStyle = ({ index, card }) => {
  return (
    <div className='row'>
    <Draggable draggableId={`card-${index}`} index={index}>
      {(provided) => (
        <div
          ref={provided.innerRef}
          {...provided.draggableProps}
          {...provided.dragHandleProps}
        >
          <div className="col-3" style={{ margin: '10px' }}>
            <div className="card shadow">
              <img src="/images/ARA.jpg" alt="" height="250" width="250" />
              <div className="card-header border-0 bg-white">
                <div className="d-flex justify-content-center">
                  <label style={{ color: '#5e72e4' }}>{card}</label>
                </div>
              </div>
              <div className="card-body ms-2 ">
                <span style={{ fontSize: 'small', color: 'grey' }}> nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn</span>
                <div className="mt-4">
                  <button className="border-0 p-2 text-bg-success" style={{ borderRadius: '50%' }}>$10.00</button>
                </div>
                <div className="mt-2">
                  <span className="text-success" style={{ fontSize: 'small' }}>AVAILABLE</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        )}
        </Draggable>
    </div>
  );
};

export default CardsStyle;
