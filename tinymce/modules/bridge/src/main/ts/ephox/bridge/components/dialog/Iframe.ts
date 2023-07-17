import { FieldSchema, StructureSchema, ValueType } from '@ephox/boulder';
import { Result } from '@ephox/katamari';

import { FormComponentWithLabel, formComponentWithLabelFields, FormComponentWithLabelSpec } from './FormComponent';

export interface IframeSpec extends FormComponentWithLabelSpec {
  type: 'iframe';
  sandboxed?: boolean;
  transparent?: boolean;
}

export interface Iframe extends FormComponentWithLabel {
  type: 'iframe';
  sandboxed: boolean;
  transparent: boolean;
}

const iframeFields = formComponentWithLabelFields.concat([
  FieldSchema.defaultedBoolean('sandboxed', true),
  FieldSchema.defaultedBoolean('transparent', true)
]);

export const iframeSchema = StructureSchema.objOf(iframeFields);

export const iframeDataProcessor = ValueType.string;

export const createIframe = (spec: IframeSpec): Result<Iframe, StructureSchema.SchemaError<any>> =>
  StructureSchema.asRaw<Iframe>('iframe', iframeSchema, spec);
